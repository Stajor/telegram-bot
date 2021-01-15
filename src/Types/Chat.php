<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Chat extends Type {
    protected $meta = [
        'photo'             => ChatPhoto::class,
        'pinned_message'    => Message::class,
        'permissions'       => ChatPermissions::class
    ];

    public int $id;
    public string $type;
    public ?string $title;
    public ?string $username;
    public ?string $first_name;
    public ?string $last_name;
    public ?ChatPhoto $photo;
    public ?string $description;
    public ?string $invite_link;
    public ?Message $pinned_message;
    public ?ChatPermissions $permissions;
    public ?int $slow_mode_delay;
    public ?string $sticker_set_name;
    public ?bool $can_set_sticker_set;
}
