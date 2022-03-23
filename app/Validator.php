<?php

namespace App\Validation;

use Illuminate\Validation\Validator as APICodeTest;
use Illuminate\Contracts\Validation\Rule as RuleContract;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\ValidationRuleParser;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Validator extends APICodeTest
{
    /**
     * Determine if the data passes the validation rules.
     *
     * @return bool
     */
    public function passes()
    {
        $this->messages = new MessageBag();

        [$this->distinctValues, $this->failedRules] = [[], []];

        // We'll spin through each rule, validating the attributes attached to that
        // rule. Any error messages will be added to the containers with each of
        // the other error messages, returning true if we don't have messages.
        foreach ($this->rules as $attribute => $rules) {
            if ($this->shouldBeExcluded($attribute)) {
                $this->removeAttribute($attribute);

                continue;
            }

            if ($this->stopOnFirstFailure && $this->messages->isNotEmpty()) {
                break;
            }

            foreach ($rules as $ruleKey => $rule) {
                $this->validateAttributeWithRuleKey($attribute, $rule, $ruleKey);

                if ($this->shouldBeExcluded($attribute)) {
                    $this->removeAttribute($attribute);

                    break;
                }

                if ($this->shouldStopValidating($attribute)) {
                    break;
                }
            }
        }

        // Here we will spin through all of the "after" hooks on this validator and
        // fire them off. This gives the callbacks a chance to perform all kinds
        // of other validation that needs to get wrapped up in this operation.
        foreach ($this->after as $after) {
            $after();
        }

        return $this->messages->isEmpty();
    }

    /**
     * Validate a given attribute against a rule.
     *
     * @param  string  $attribute
     * @param  string  $rule
     * @param  string  $ruleKey
     * @return void
     */
    protected function validateAttributeWithRuleKey($attribute, $rule, $ruleKey)
    {
        $this->currentRule = $rule;

        [$rule, $parameters] = ValidationRuleParser::parse($rule);

        if ($rule === '') {
            return;
        }

        // First we will get the correct keys for the given attribute in case the field is nested in
        // an array. Then we determine if the given rule accepts other field names as parameters.
        // If so, we will replace any asterisks found in the parameters with the correct keys.
        if (
            ($keys = $this->getExplicitKeys($attribute))
            && $this->dependsOnOtherFields($rule)
        ) {
            $parameters = $this->replaceAsterisksInParameters($parameters, $keys);
        }

        $value = $this->getValue($attribute);

        // If the attribute is a file, we will verify that the file upload was actually successful
        // and if it wasn't we will add a failure for the attribute. Files may not successfully
        // upload if they are too large based on PHP's settings so we will bail in this case.
        if (
            $value instanceof UploadedFile
            && ! $value->isValid()
            && $this->hasRule($attribute, array_merge($this->fileRules, $this->implicitRules))
        ) {
            return $this->addFailureWithKey($attribute, 'uploaded', $ruleKey, []);
        }

        // If we have made it this far we will make sure the attribute is validatable and if it is
        // we will call the validation method with the attribute. If a method returns false the
        // attribute is invalid and we will add a failure message for this failing attribute.
        $validatable = $this->isValidatable($rule, $attribute, $value);

        if ($rule instanceof RuleContract) {
            return $validatable
                ? $this->validateUsingCustomRuleWithKey($attribute, $value, $rule, $ruleKey)
                : null;
        }

        $method = "validate{$rule}";

        if ($validatable && ! $this->$method($attribute, $value, $parameters, $this)) {
            $this->addFailureWithKey($attribute, $rule, $ruleKey, $parameters);
        }
    }

    /**
     * Validate an attribute using a custom rule object.
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @param  \Illuminate\Contracts\Validation\Rule  $rule
     * @param  string  $ruleKey
     * @return void
     */
    protected function validateUsingCustomRuleWithKey($attribute, $value, $rule, $ruleKey = '')
    {
        $attribute = $this->replacePlaceholderInString($attribute);

        $value = is_array($value) ? $this->replacePlaceholders($value) : $value;

        if (! $rule->passes($attribute, $value)) {
            $this->failedRules[$attribute][get_class($rule)] = [];

            $messages = $rule->message();

            $messages = $messages ? (array) $messages : [get_class($rule)];

            foreach ($messages as $message) {
                $formatedMessage = $this->makeReplacements(
                    $message,
                    $attribute,
                    get_class($rule),
                    []
                );

                $this->messages->add($attribute, [
                    'key' => $this->getRuleName(get_class($rule), $ruleKey),
                    'message' => $formatedMessage,
                ]);
            }
        }
    }

    /**
     * Add a failed rule with key and error message to the collection.
     *
     * @param  string  $attribute
     * @param  string  $rule
     * @param  string  $ruleKey
     * @param  array  $parameters
     * @return void
     */
    public function addFailureWithKey($attribute, $rule, $ruleKey = '', $parameters = [])
    {
        if (! $this->messages) {
            $this->passes();
        }

        $attribute = str_replace(
            [$this->dotPlaceholder, '__asterisk__'],
            ['.', '*'],
            $attribute
        );

        if (in_array($rule, $this->excludeRules)) {
            return $this->excludeAttribute($attribute);
        }

        $formatedMessage = $this->makeReplacements(
            $this->getMessage($attribute, $rule),
            $attribute,
            $rule,
            $parameters
        );

        $this->messages->add($attribute, [
            'key' => $this->getRuleName($rule, $ruleKey),
            'message' => $formatedMessage,
        ]);

        $this->failedRules[$attribute][$rule] = $parameters;
    }

    /**
     * Get Rule Name
     *
     * @param string $rule
     * @param string $ruleKey
     * @return string
     */
    protected function getRuleName($rule, $ruleKey)
    {
        if (!empty($ruleKey) && !is_numeric($ruleKey)) {
            return $ruleKey;
        }

        if (class_exists($rule)) {
            return Str::snake(substr($rule, strrpos($rule, '\\') + 1), '-');
        }

        return strtolower($rule);
    }
}