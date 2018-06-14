<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ForceReply extends Type {
    public $force_reply;
    public $selective = false;

    public function __toString() {
        return json_encode(['force_reply' => $this->force_reply, 'selective' => $this->selective]);
    }
}