<?php namespace Telegram\Bot\Test\Api;

use \Telegram\Bot\Exceptions\ResponseException;

class ExceptionTest extends ApiTestCase {
    public function testResponseException() {
        $this->expectException(ResponseException::class);
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Bad Request: chat not found');

        self::$api->getChat(['chat_id' => -1]);
    }
}
