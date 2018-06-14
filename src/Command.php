<?php namespace Telegram\Bot;

abstract class Command {
    protected $name;
    protected $description;
    private $api;
    private $payload;
    private $handler;

    abstract public function handle();

    public function getName() {
        return $this->name;
    }

    public function setApi(Api $api) {
        $this->api = $api;
    }

    public function getApi(): Api {
        return $this->api;
    }

    public function setPayload(Payload $payload) {
        $this->payload = $payload;
    }

    public function getPayload(): Payload {
        return $this->payload;
    }

    public function setHandler(CommandsHandler $handler) {
        $this->handler = $handler;
    }

    public function triggerCommand(string $command) {
        $command = strpos($command, '/', 0) === 0 ? $command : "/{$command}";

        $this->handler->triggerCommand($this->getPayload(), $command);
    }

    public function replyWithMessage(array $params) {
        $params['chat_id'] = $this->getPayload()->getChat()->id;

        return $this->getApi()->sendMessage($params);
    }

    public function replyWithAction(string $action) {
        return $this->getApi()->sendChatAction(['chat_id' => $this->getPayload()->getChat()->id, 'action' => $action]);
    }
}