<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ShippingQuery extends Type {
    protected array $meta = [
        'from'              => User::class,
        'shipping_address'  => ShippingAddress::class
    ];

    public $id;
    public $from;
    public $invoice_payload;
    public $shipping_address;
}
