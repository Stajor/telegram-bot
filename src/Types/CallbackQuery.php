<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class CallbackQuery extends Type {
    protected $meta = [
        'from'      => User::class,
        'message'   => Message::class
    ];

    public $id;
    public $from;
    public $message;
    public $inline_message_id;
    public $chat_instance;
    public $data;
    public $game_short_name;
}