<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ChosenInlineResult extends Type {
    protected $meta = [
        'from'      => User::class,
        'location'  => Location::class
    ];

    public $result_id;
    public $from;
    public $location;
    public $inline_message_id;
    public $query;
}