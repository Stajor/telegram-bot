<?php namespace Telegram\Bot;

use Telegram\Bot\Types\CallbackQuery;
use Telegram\Bot\Types\Chat;
use Telegram\Bot\Types\Message;
use Telegram\Bot\Types\Update;

class Payload {
    private $messagesKeys = ['message', 'edited_message', 'channel_post', 'edited_channel_post'];
    private $update;
    private $message;

    public function __construct(Update $update) {
        $this->update = $update;

        $this->setMessage();
    }

    public function getUpdate(): Update {
        return $this->update;
    }

    public function getMessage(): Message {
        return $this->message;
    }

    public function getChat(): Chat {
        return $this->getMessage()->chat;
    }

    public function getCallbackQuery(): ?CallbackQuery {
        return $this->getUpdate()->callback_query;
    }

    private function setMessage() {
        foreach ($this->messagesKeys AS $key) {
            if (isset($this->update->{$key})) {
                $this->message = $this->update->{$key};
            }
        }

        if (isset($this->update->callback_query)) {
            $this->message = $this->update->callback_query->message;
        }
    }
}