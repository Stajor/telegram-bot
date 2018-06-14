<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Chat extends Type {
    protected $meta = [
        'photo'             => ChatPhoto::class,
        'pinned_message'    => Message::class
    ];

    public $id;
    public $type;
    public $title;
    public $username;
    public $first_name;
    public $last_name;
    public $all_members_are_administrators;
    public $photo;
    public $description;
    public $invite_link;
    public $pinned_message;
    public $sticker_set_name;
    public $can_set_sticker_set;
}