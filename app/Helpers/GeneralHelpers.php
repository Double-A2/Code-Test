<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/12/21
 * Time: 11:38 AM
 */

function include_route_files($folder)
{
    try {
        $rdi = new recursiveDirectoryIterator($folder);
        $it = new recursiveIteratorIterator($rdi);

        while ($it->valid()) {
            if (!$it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php') {
                require $it->key();
            }

            $it->next();
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
