<?php namespace Telegram\Bot\Test\Command;

use Telegram\Bot\Api;
use Telegram\Bot\Payload;
use Telegram\Bot\Types\Chat;
use Telegram\Bot\Types\Update;

class HandlerTest extends HandlerTestCase {
    protected static $command;

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        $input = '{"update_id":18310025,"message":{"message_id":536,"from":{"id":42858,"is_bot":false,"first_name":"Alex","last_name":"B","username":"AlexBel","language_code":"en-IL"},"chat":{"id":42858,"first_name":"Alex","last_name":"B","username":"AlexBel","type":"private"},"date":1528143652,"text":"/test","entities":[{"offset":0,"length":5,"type":"bot_command"}]}}';

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
        $this->assertInstanceOf(Chat::class, self::$command->getPayload()->getChat());
    }
}