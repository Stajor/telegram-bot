<?php namespace Telegram\Bot\Test\Command;

use Telegram\Bot\Command;
use Telegram\Bot\Types\Action;
use Telegram\Bot\Types\Message;

class HelpersTest extends HandlerTestCase {
    /** @var Command */
    protected static $command;

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        $input = '{"update_id":18310025,"message":{"message_id":536,"from":{"id":42858,"is_bot":false,"first_name":"Alex","last_name":"B","username":"AlexBel","language_code":"en-IL"},"chat":{"id":42858,"first_name":"Alex","last_name":"B","username":"AlexBel","type":"private"},"date":1528143652,"text":"/test","entities":[{"offset":0,"length":5,"type":"bot_command"}]}}';

        self::$handler->setInput(json_decode($input, true));
        self::$handler->addCommand(TestCommand::class);

        self::$command = self::$handler->handle();
    }

    public function testReplyWithMessage() {
        $message = self::$command->replyWithMessage(['text' => 'reply with message']);

        $this->assertInstanceOf(Message::class, $message);
    }

    public function testReplyWithAction() {
        $result = self::$command->replyWithAction(Action::TYPING);

        $this->assertEquals(true, $result);
    }
}