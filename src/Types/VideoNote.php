<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class VideoNote extends Type {
    protected $meta = [
        'thumb' => PhotoSize::class
    ];

    public $file_id;
    public $length;
    public $duration;
    public $thumb;
    public $file_size;
}