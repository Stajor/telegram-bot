<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class EncryptedCredentials extends Type {
    public $data;
    public $hash;
    public $secret;
}