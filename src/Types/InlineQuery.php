<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class InlineQuery extends Type {
    protected $meta = [
        'from'      => User::class,
        'location'  => Location::class
    ];

    public $id;
    public $from;
    public $location;
    public $query;
    public $offset;
}