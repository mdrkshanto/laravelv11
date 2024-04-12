<?php

if (!function_exists('makeDirectory')) {
    function makeDirectory(string $directory): void
    {
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    }
}
