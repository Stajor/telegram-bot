<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class MessageEntity extends Type {
    protected $meta = [
        'user' => User::class
    ];

    public $type;
    public $offset;
    public $length;
    public $url;
    public $user;
}