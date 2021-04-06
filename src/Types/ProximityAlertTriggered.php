<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ProximityAlertTriggered extends Type {
    protected array $meta = [
        'traveler'  => User::class,
        'watcher'   => User::class,
    ];

    public User $traveler;
    public User $watcher;
    public int $distance;
}
