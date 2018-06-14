<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class PreCheckoutQuery extends Type {
    protected $meta = [
        'from'          => User::class,
        'order_info'    => OrderInfo::class
    ];

    public $id;
    public $from;
    public $currency;
    public $total_amount;
    public $invoice_payload;
    public $shipping_option_id;
    public $order_info;
}