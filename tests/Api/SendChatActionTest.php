<?php namespace Telegram\Bot\Test\Api;

use Telegram\Bot\Types\Action;

class SendChatActionTest extends ApiTestCase {
    protected static $result;

    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        self::$result = self::$api->sendChatAction(['chat_id' => 123, 'action' => Action::TYPING]);
    }

    public function testHasInstanceOfMessage() {
        $this->assertEquals(true, self::$result);
    }
}
