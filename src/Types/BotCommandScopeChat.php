<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class BotCommandScopeChat extends Type {
    public string $type;
    public string $chat_id;
}
