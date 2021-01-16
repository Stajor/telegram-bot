<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class BotCommand extends Type {
    public string $command;
    public string $description;
}
