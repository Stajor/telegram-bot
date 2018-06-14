<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Document extends Type {
    protected $meta = [
        'thumb' => PhotoSize::class
    ];

    public $file_id;
    public $thumb;
    public $file_name;
    public $mime_type;
    public $file_size;
}