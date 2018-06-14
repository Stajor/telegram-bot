<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class KeyboardButton extends Type {
    public $text;
    public $request_contact;
    public $request_location;
}