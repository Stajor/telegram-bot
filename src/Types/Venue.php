<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Venue extends Type {
    protected array $meta = [
        'location' => Location::class
    ];

    public $location;
    public $title;
    public $address;
    public $foursquare_id;
    public $foursquare_type;
}
