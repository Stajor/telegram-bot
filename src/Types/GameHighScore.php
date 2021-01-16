<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class GameHighScore extends Type {
    protected array $meta = [
        'user' => User::class
    ];

    public int $position;
    public User $user;
    public int $score;
}
