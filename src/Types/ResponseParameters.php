<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ResponseParameters extends Type {
    public $migrate_to_chat_id;
    public $retry_after;
}