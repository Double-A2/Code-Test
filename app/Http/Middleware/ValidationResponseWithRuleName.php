<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidationResponseWithRuleName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        app()->get('validator')
            ->resolver(function ($translator, $data, $rules, $messages, $customAttributes) {
                return new \App\Validation\Validator($translator, $data, $rules, $messages, $customAttributes);
            });

        return $next($request);
    }
}