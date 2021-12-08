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
    public bool $creates_join_request;
    public ?int $pending_join_request_count = null;
    public ?string $name = null;
}
