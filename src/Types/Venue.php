<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Venue extends Type {
    protected $meta = [
        'location' => Location::class
    ];

    public $location;
    public $title;
    public $address;
    public $foursquare_id;
}