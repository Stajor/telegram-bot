<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class BotCommandScopeChatMember extends Type {
    public string $type;
    public string $chat_id;
    public string $user_id;
}
