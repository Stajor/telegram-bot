<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class PassportData extends Type {
    protected $meta = [
        'data'          => EncryptedPassportElement::class,
        'credentials'   => EncryptedCredentials::class
    ];

    public $data;
    public $credentials;
}