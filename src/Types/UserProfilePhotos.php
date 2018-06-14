<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class UserProfilePhotos extends Type {
    protected $meta = [
        'photos' => PhotoSize::class
    ];

    public $total_count;
    public $photos;
}