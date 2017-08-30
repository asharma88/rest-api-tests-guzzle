<?php

if (!function_exists('curl_init')) {
    die("Cannot run unit tests; cURL must be enabled!");
}

if (!($loader = include __DIR__ . '/../vendor/autoload.php')) {
    die("Cannot run unit tests; install dependencies via Composer!");
}

?>
