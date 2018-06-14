<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Voice extends Type {
    public $file_id;
    public $duration;
    public $mime_type;
    public $file_size;
}