<?php namespace Telegram\Bot\Test\Command;

use PHPUnit\Framework\TestCase;
use Telegram\Bot\CommandsHandler;
use Telegram\Bot\Test\TestClient;

class HandlerTestCase extends TestCase {
    /** @var CommandsHandler $handler */
    protected static $handler;

    public static function setUpBeforeClass() {
        self::$handler = new CommandsHandler(getenv('BOT_TOKEN'), new TestClient());
    }
}