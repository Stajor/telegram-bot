<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ChatInviteLink extends Type {
    protected array $meta = [
        'creator' => User::class
    ];

    public string $invite_link;
    public User $creator;
    public bool $is_primary;
    public bool $is_revoked;
    public ?int $expire_date = null;
    public ?int $member_limit = null;
}
