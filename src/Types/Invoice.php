<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Invoice extends Type {
    public $title;
    public $description;
    public $start_parameter;
    public $currency;
    public $total_amount;
}