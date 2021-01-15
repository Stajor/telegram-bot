<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ChatPhoto extends Type {
    public string $small_file_id;
    public string $small_file_unique_id;
    public string $big_file_id;
    public string $big_file_unique_id;
}
