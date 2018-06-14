<?php namespace Telegram\Bot\Test\Api;

class ExceptionTest extends ApiTestCase {
    /**
     * @expectedException \Telegram\Bot\Exceptions\ResponseException
     * @expectedExceptionCode 400
     * @expectedExceptionMessage Bad Request: chat not found
     */
    public function testResponseException() {
        self::$api->getChat(['chat_id' => -1]);
    }
}