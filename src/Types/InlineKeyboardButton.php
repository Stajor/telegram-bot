<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class InlineKeyboardButton extends Type {
    protected $meta = [
        'callback_game' => CallbackGame::class
    ];

    public $text;
    public $url;
    public $callback_data;
    public $switch_inline_query;
    public $switch_inline_query_current_chat;
    public $callback_game;
    public $pay;
}