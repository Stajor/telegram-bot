<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Message extends Type {
    protected $meta = [
        'from'                  => User::class,
        'chat'                  => Chat::class,
        'forward_from'          => User::class,
        'forward_from_chat'     => Chat::class,
        'reply_to_message'      => Message::class,
        'entities'              => MessageEntity::class,
        'caption_entities'      => MessageEntity::class,
        'audio'                 => Audio::class,
        'document'              => Document::class,
        'game'                  => Game::class,
        'photo'                 => PhotoSize::class,
        'sticker'               => Sticker::class,
        'video'                 => Video::class,
        'voice'                 => Voice::class,
        'video_note'            => VideoNote::class,
        'contact'               => Contact::class,
        'location'              => Location::class,
        'venue'                 => Venue::class,
        'new_chat_members'      => User::class,
        'left_chat_member'      => User::class,
        'new_chat_photo'        => PhotoSize::class,
        'pinned_message'        => Message::class,
        'invoice'               => Invoice::class,
        'successful_payment'    => SuccessfulPayment::class
    ];

    public $message_id;
    public $from;
    public $date;
    public $chat;
    public $forward_from;
    public $forward_from_chat;
    public $forward_from_message_id;
    public $forward_signature;
    public $forward_date;
    public $reply_to_message;
    public $edit_date;
    public $media_group_id;
    public $author_signature;
    public $text;
    public $entities;
    public $caption_entities;
    public $audio;
    public $document;
    public $game;
    public $photo;
    public $sticker;
    public $video;
    public $voice;
    public $video_note;
    public $caption;
    public $contact;
    public $location;
    public $venue;
    public $new_chat_members;
    public $left_chat_member;
    public $new_chat_title;
    public $new_chat_photo;
    public $delete_chat_photo;
    public $group_chat_created;
    public $supergroup_chat_created;
    public $channel_chat_created;
    public $migrate_to_chat_id;
    public $migrate_from_chat_id;
    public $pinned_message;
    public $invoice;
    public $successful_payment;
    public $connected_website;
}