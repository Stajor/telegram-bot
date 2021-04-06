<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ChatMemberUpdated extends Type {
    protected array $meta = [
        'chat'              => Chat::class,
        'from'              => User::class,
        'old_chat_member'   => ChatMember::class,
        'new_chat_member'   => ChatMember::class,
        'invite_link'       => ChatInviteLink::class
    ];

    public Chat $chat;
    public User $from;
    public int $date;
    public ChatMember $old_chat_member;
    public ChatMember $new_chat_member;
    public ChatInviteLink $invite_link;
}
