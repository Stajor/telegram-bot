<?php namespace Telegram\Bot\Test\Command;

use Telegram\Bot\Api;
use Telegram\Bot\Payload;
use Telegram\Bot\Types\Chat;
use Telegram\Bot\Types\Update;
use Telegram\Bot\Types\User;

class HandlerInlineTest extends HandlerTestCase {
    protected static $command;

    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        $input = '{"update_id":990352342,"inline_query":{"id":"184075316566840","from":{"id":123456,"is_bot":false,"first_name":"First","last_name":"Last","username":"user","language_code":"en"},"query":"/test","offset":""}}';

        self::$handler->setInput(json_decode($input, true));
        self::$handler->addCommand(TestCommand::class);

        self::$command = self::$handler->handle();
    }

    public function testHandleCommand() {
        $this->assertInstanceOf(TestCommand::class, self::$command);
        $this->assertInstanceOf(Api::class, self::$command->getApi());
    }

    public function testCommandPayload() {
        $this->assertInstanceOf(Payload::class, self::$command->getPayload());
        $this->assertInstanceOf(Update::class, self::$command->getPayload()->getUpdate());
        $this->assertInstanceOf(User::class, self::$command->getPayload()->getUser());
    }
}
