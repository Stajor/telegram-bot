<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class EncryptedPassportElement extends Type {
    protected $meta = [
        'files'         => PassportFile::class,
        'front_side'    => PassportFile::class,
        'reverse_side'  => PassportFile::class,
        'selfie'        => PassportFile::class
    ];

    public $type;
    public $data;
    public $phone_number;
    public $email;
    public $files;
    public $front_side;
    public $reverse_side;
    public $selfie;
}