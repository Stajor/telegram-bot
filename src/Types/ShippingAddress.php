<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ShippingAddress extends Type {
    public $country_code;
    public $state;
    public $city;
    public $street_line1;
    public $street_line2;
    public $post_code;
}