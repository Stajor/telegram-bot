<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class BotCommandScopeChatAdministrators extends Type {
    public string $type;
    public string $chat_id;
}
