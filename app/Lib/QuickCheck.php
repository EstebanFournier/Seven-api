<?php
namespace App\Lib;

use Symfony\Component\HttpFoundation\ParameterBag;

class QuickCheck {
    /**
     * @param Array<String> $required
     * @param ParameterBag $found
     * @return null|Array<String, String>
     */
    public static function quickCheck(Array $required, ParameterBag $found) {
        foreach ($required as $key) {
            if ($found->get($key) == null) {
                return [
                    'error' => 'The field "' . $key . '" is missing'
                ];
            };
        };
        return null;
    }
}