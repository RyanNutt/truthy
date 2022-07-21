<?php

if (!function_exists('isTruthy')) {
    function isTruthy($value): bool
    {
        if (is_string($value)) {
            return !in_array(strtolower($value), [
                '', '0', '0.0', 'false', 'f', 'no', 'n', 'off', 'null',
            ]);
        } else if (is_int($value)) {
            return $value !== 0;
        } else if (is_float($value)) {
            return $value !== 0.0;
        } else if (is_bool($value)) {
            return $value;
        } else if (is_array($value)) {
            return !empty($value);
        } else if (is_object($value)) {
            return count(get_class_vars(get_class($value))) > 0 || count(get_class_methods(get_class($value))) > 0;
        } else {
            return false;
        }
    }
}

if (!function_exists('isFalsy')) {
    function isFalsy($value): bool
    {
        return !isTruthy($value);
    }
}
