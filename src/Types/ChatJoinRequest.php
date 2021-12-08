<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ChatJoinRequest extends Type {
    protected array $meta = [
        'chat'          => Chat::class,
        'from'          => User::class,
        'invite_link'   => ChatInviteLink::class,
    ];

    public Chat $chat;
    public User $from;
    public int $date;
    public ?string $bio = null;
    public ?ChatInviteLink $invite_link = null;
}
