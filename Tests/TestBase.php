<?php

namespace Tests;

use Psr\Http\Message\ResponseInterface;

abstract class TestBase extends \PHPUnit\Framework\TestCase {
    protected static $client;
    protected static $api_host;

    public static function setUpBeforeClass() {
        self::$api_host = getenv('API_HOST');
        self::$client = new \GuzzleHttp\Client();
    }
}

?>
