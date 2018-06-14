<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Audio extends Type {
    public $file_id;
    public $duration;
    public $performer;
    public $title;
    public $mime_type;
    public $file_size;
}