<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class PassportElementError extends Type {
    public $source;
    public $type;
    public $message;
}