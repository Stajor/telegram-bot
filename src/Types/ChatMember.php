<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ChatMember extends Type {
    protected $meta = [
        'user' => User::class
    ];

    public $user;
    public $status;
    public $until_date;
    public $can_be_edited;
    public $can_change_info;
    public $can_post_messages;
    public $can_edit_messages;
    public $can_delete_messages;
    public $can_invite_users;
    public $can_restrict_members;
    public $can_pin_messages;
    public $can_promote_members;
    public $can_send_messages;
    public $can_send_media_messages;
    public $can_send_other_messages;
    public $can_add_web_page_previews;
}