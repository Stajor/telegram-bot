<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class PollAnswer extends Type {
    protected array $meta = [
        'user' => User::class
    ];

    public string $poll_id;
    public User $user;
    public array $option_ids;
}
