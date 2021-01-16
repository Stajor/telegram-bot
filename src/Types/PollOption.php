<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class PollOption extends Type {
    public string $text;
    public int $voter_count;
}
