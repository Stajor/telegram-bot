<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Video extends Type {
    protected $meta = [
        'thumb' => PhotoSize::class
    ];

    public $file_id;
    public $width;
    public $height;
    public $duration;
    public $thumb;
    public $mime_type;
    public $file_size;
}