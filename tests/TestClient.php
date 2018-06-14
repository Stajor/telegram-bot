<?php namespace Telegram\Bot\Test;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;

class TestClient extends Client {
    protected $body;

    public function request($method, $uri = '', array $options = []) {
        $ex = explode('/', $uri);
        $method = end($ex);

        if (method_exists($this, $method)) {
            $this->body = $this->{$method}(isset($options['form_params']) ? $options['form_params'] : []);
            return $this;
        } else {
            return parent::request($method, $uri, $options);
        }
    }

    public function getBody() {
        return $this->body;
    }

    protected function getMe(array $params) {
        return '{"ok":true,"result":{"id":321,"is_bot":true,"first_name":"myBot","username":"myBot"}}';
    }

    protected function getChat(array $params) {
        if ($params['chat_id'] == -1) {
            throw new ClientException('`400 Bad Request` response:{"ok":false,"error_code":400,"description":"Bad Request: chat not found"}', new Request('POST', '/'));
        }
    }

    protected function sendMessage(array $params) {
        return '{"ok":true,"result":{"message_id":1,"from":{"id":123,"is_bot":true,"first_name":"myBot","username":"myBot"},"chat":{"id":321,"first_name":"Alex","last_name":"B","username":"Alex B","type":"private"},"date":1528813635,"text":"test message"}}';
    }

    protected function sendChatAction(array $params) {
        return '{"ok":true,"result":true}';
    }
}