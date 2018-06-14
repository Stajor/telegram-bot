<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class PhotoSize extends Type {
    public $file_id;
    public $width;
    public $height;
    public $file_size;
}