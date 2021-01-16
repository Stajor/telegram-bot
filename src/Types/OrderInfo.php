<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class OrderInfo extends Type {
    protected array $meta = [
        'shipping_address' => ShippingAddress::class
    ];

    public $name;
    public $phone_number;
    public $email;
    public $shipping_address;
}
