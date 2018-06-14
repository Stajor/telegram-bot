<?php namespace Telegram\Bot\Test\Api;

use PHPUnit\Framework\TestCase;
use Telegram\Bot\Api;
use Telegram\Bot\Test\TestClient;

class ApiTestCase extends TestCase {
    /** @var Api */
    protected static $api;

    public static function setUpBeforeClass() {
        self::$api = new Api('123:ABC', new TestClient());
    }
}