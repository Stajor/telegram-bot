<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class SuccessfulPayment extends Type {
    protected $meta = [
        'order_info' => OrderInfo::class
    ];

    public $currency;
    public $total_amount;
    public $invoice_payload;
    public $shipping_option_id;
    public $order_info;
    public $telegram_payment_charge_id;
    public $provider_payment_charge_id;
}