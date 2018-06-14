<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ReplyKeyboardRemove extends Type {
    public $remove_keyboard;
    public $selective = false;

    public function __toString() {
        return json_encode(['remove_keyboard' => $this->remove_keyboard, 'selective' => $this->selective]);
    }
}