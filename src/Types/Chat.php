<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Chat extends Type {
    protected array $meta = [
        'photo'             => ChatPhoto::class,
        'pinned_message'    => Message::class,
        'permissions'       => ChatPermissions::class
    ];

    public int $id;
    public string $type;
    public ?string $title = null;
    public ?string $username = null;
    public ?string $first_name = null;
    public ?string $last_name = null;
    public ?ChatPhoto $photo = null;
    public ?string $description = null;
    public ?string $invite_link = null;
    public ?Message $pinned_message = null;
    public ?ChatPermissions $permissions = null;
    public ?int $slow_mode_delay = null;
    public ?string $sticker_set_name = null;
    public ?bool $can_set_sticker_set = null;
}
