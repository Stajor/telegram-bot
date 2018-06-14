<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class InputMediaPhoto extends Type {
    public $type;
    public $media;
    public $caption;
    public $parse_mode;
}