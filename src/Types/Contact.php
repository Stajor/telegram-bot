<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Contact extends Type {
    public $phone_number;
    public $first_name;
    public $last_name;
    public $user_id;
}