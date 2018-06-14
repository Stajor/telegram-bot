<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Game extends Type {
    protected $meta = [
        'photo'         => PhotoSize::class,
        'text_entities' => MessageEntity::class,
        'animation'     => Animation::class
    ];

    public $title;
    public $description;
    public $photo;
    public $text;
    public $text_entities;
    public $animation;
}