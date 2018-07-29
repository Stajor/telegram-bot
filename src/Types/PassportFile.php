<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class PassportFile extends Type {
    public $file_id;
    public $file_size;
    public $file_date;
}