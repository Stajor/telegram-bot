<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class VoiceChatParticipantsInvited extends Type {
    protected array $meta = [
        'users' => User::class
    ];

    public array $users;
}
