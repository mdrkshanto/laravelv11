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
        Validator::extend('date_formats', function ($attribute, $value, $formats) {
            foreach (explode(',', $formats) as $format) {
                $parsed = DateTime::createFromFormat($format, $value);
                if ($parsed && $parsed->format($format) == $value) {
                    return true;
                }
            }
            return false;
        }, 'The :attribute does not match the required date format.');
    }
}
