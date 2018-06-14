<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class InputMediaVideo extends Type {
    public $type;
    public $media;
    public $caption;
    public $parse_mode;
    public $width;
    public $height;
    public $duration;
    public $supports_streaming;
}