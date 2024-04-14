<?php

namespace App\Providers;

use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /* m-d-Y, n-j-Y */
        Validator::extend('date_formats', function ($attribute, $value, $parameters) {
            $formats = implode(',', $parameters);
            $formatArray = explode(',', $formats);
            foreach ($formatArray as $format) {
                $parsed = DateTime::createFromFormat($format, $value);
                if ($parsed && $parsed->format($format) == $value) {
                    return true;
                }
            }
            return false;
        });

        Validator::replacer('date_formats', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':format', implode(' or ', $parameters), "The $attribute does not match the format :format.");
        });
    }
}
