<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Dice extends Type {
    public string $emoji;
    public int $value;
}
