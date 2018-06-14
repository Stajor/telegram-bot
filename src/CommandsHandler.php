<?php namespace Telegram\Bot;

use GuzzleHttp\ClientInterface;
use Telegram\Bot\Types\Update;

class CommandsHandler {
    private $commands = [];
    private $fallback;
    private $input;
    private $token;
    private $api;

    public function __construct(string $token, ClientInterface $client = null) {
        $this->token = $token;
        $this->api = new Api($this->token, $client);
    }

    public function addCommand(string $command) {
        $this->commands[] = $command;

        return $this;
    }

    public function removeCommand(string $command) {
        $this->commands = array_filter($this->commands, function($cmd) use ($command) {
            return $cmd != $command;
        });
    }

    public function addFallbackCommand(string $fallback) {
        $this->fallback = $fallback;

        return $this;
    }

    public function getInput() {
        return $this->input;
    }

    public function setInput(array $input) {
        $this->input = $input;
    }

    public function handle(): Command {
        if (empty($this->getInput())) {
            $input = file_get_contents('php://input');
            $this->setInput(json_decode($input, true));
        }

        $update     = new Update($this->getInput());
        $payload    = new Payload($update);

        return $this->triggerCommand($payload);
    }

    public function triggerCommand(Payload $payload, string $command = null): Command {
        $command = $this->getCommand($payload, $command);

        $command->setApi($this->api);
        $command->setPayload($payload);
        $command->setHandler($this);
        $command->handle();

        return $command;
    }

    private function getCommand(Payload $payload, string $command = null): Command {
        if (is_null($command)) {
            $messageText    = $payload->getMessage()->text;
            $queryText      = is_null($payload->getCallbackQuery()) ? null : $payload->getCallbackQuery()->data;
        } else {
            $messageText    = $command;
            $queryText      = null;
        }

        foreach ($this->commands AS $command) {
            /** @var Command $cmd */
            $cmd = new $command();

            if (strpos($messageText, "/{$cmd->getName()}", 0) === 0) {
                return $cmd;
            } elseif (!is_null($queryText) && strpos($queryText, "/{$cmd->getName()}", 0) === 0) {
                return $cmd;
            }
        }

        if (isset($this->fallback)) {
            return new $this->fallback();
        }

        return null;
    }
}