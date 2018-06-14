<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class User extends Type {
    public $id;
    public $is_bot;
    public $first_name;
    public $last_name;
    public $username;
    public $language_code;
}