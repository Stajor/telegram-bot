<?php namespace Telegram\Bot\Test\Command;

class CallbackHandlerTest extends HandlerTestCase {
    protected static $command;

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        $input = '{"update_id":183031, "callback_query":{"id":"1840763157951","from":{"id":458,"is_bot":false,"first_name":"Alex","last_name":"B","username":"Alex B","language_code":"ru-RU"},"message":{"message_id":75,"from":{"id":8001,"is_bot":true,"first_name":"myBot","username":"myBot"},"chat":{"id":458,"first_name":"Alex","last_name":"B","username":"Alex B","type":"private"},"date":1528314475,"text":"test"},"chat_instance":"56025909","data":"/test"}}';

        self::$handler->setInput(json_decode($input, true));
        self::$handler->addCommand(TestCommand::class);

        self::$command = self::$handler->handle();
    }

    public function testHandleCommand() {
        $this->assertInstanceOf(TestCommand::class, self::$command);
    }

    public function testTriggerCommand() {
        $message = '';

        try {
            self::$command->triggerCommand('test');
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        $this->assertEquals($message, '');
    }

    public function testFallbackCommand() {
        self::$handler->addFallbackCommand(FallbackCommand::class);
        self::$handler->removeCommand(TestCommand::class);

        $command = self::$handler->handle();

        $this->assertInstanceOf(FallbackCommand::class, $command);
    }
}