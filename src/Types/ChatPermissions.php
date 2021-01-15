<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ChatPermissions extends Type {
    public ?bool $can_send_messages;
    public ?bool $can_send_media_messages;
    public ?bool $can_send_polls;
    public ?bool $can_send_other_messages;
    public ?bool $can_add_web_page_previews;
    public ?bool $can_change_info;
    public ?bool $can_invite_users;
    public ?bool $can_pin_messages;
}
