<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class InlineQuery extends Type {
    protected array $meta = [
        'from'      => User::class,
        'location'  => Location::class
    ];

    public string $id;
    public User $from;
    public string $query;
    public string $offset;
    public ?Location $location = null;
    public ?string $chat_type = null;
}
