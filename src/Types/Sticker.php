<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Sticker extends Type {
    protected $meta = [
        'thumb'         => PhotoSize::class,
        'mask_position' => MaskPosition::class
    ];

    public $file_id;
    public $width;
    public $height;
    public $thumb;
    public $emoji;
    public $set_name;
    public $mask_position;
    public $file_size;
}