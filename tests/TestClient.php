<?php namespace Telegram\Bot\Test;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

class TestClient extends Client {
    protected $body;

    public function request(string $method, $uri = '', array $options = []): ResponseInterface {
        $ex = explode('/', $uri);
        $method = end($ex);

        if (method_exists($this, $method)) {
            $this->body = $this->{$method}(isset($options['form_params']) ? $options['form_params'] : []);

            return new Response(200, [], $this->body);
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
            return '{"ok":false,"error_code":400,"description":"Bad Request: chat not found"}';
        }
    }

    protected function sendMessage(array $params) {
        return '{"ok":true,"result":{"message_id":1,"from":{"id":123,"is_bot":true,"first_name":"myBot","username":"myBot"},"chat":{"id":321,"first_name":"Alex","last_name":"B","username":"Alex B","type":"private"},"date":1528813635,"text":"test message"}}';
    }

    protected function sendChatAction(array $params) {
        return '{"ok":true,"result":true}';
    }

    protected function getWebhookInfo() {
        return '{"ok":true,"result":{"url":"https://mybot","has_custom_certificate":false,"pending_update_count":0,"max_connections":40}}';
    }

    protected function sendPhoto(array $params) {
        return '{"ok":true,"result":{"message_id":1,"from":{"id":123,"is_bot":true,"first_name":"mybot","username":"mybot"},"chat":{"id":123,"first_name":"Alex","last_name":"B","username":"rrr","type":"private"},"date":1530214125,"photo":[{"file_id":"AgADBAADmq0xG7D3qVGRhEmripIm6_nhmxoABJXHWCtlT_tx66ACAAEC","file_size":288,"width":1,"height":1}]}}';
    }
}
