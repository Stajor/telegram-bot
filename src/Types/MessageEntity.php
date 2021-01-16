<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class MessageEntity extends Type {
    protected array $meta = [
        'user' => User::class
    ];

    public string $type;
    public int $offset;
    public int $length;
    public string $url;
    public User $user;
    public string $language;
}
