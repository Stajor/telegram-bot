<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class ChatMember extends Type {
    protected array $meta = [
        'user' => User::class
    ];

    public User $user;
    public string $status;
    public ?string $custom_title = null;
    public ?bool $is_anonymous = null;
    public ?bool $can_be_edited = null;
    public ?bool $can_manage_chat = null;
    public ?bool $can_post_messages = null;
    public ?bool $can_edit_messages = null;
    public ?bool $can_delete_messages = null;
    public ?bool $can_manage_voice_chats = null;
    public ?bool $can_restrict_members = null;
    public ?bool $can_promote_members = null;
    public ?bool $can_change_info = null;
    public ?bool $can_invite_users = null;
    public ?bool $can_pin_messages = null;
    public ?bool $is_member = null;
    public ?bool $can_send_messages = null;
    public ?bool $can_send_media_messages = null;
    public ?bool $can_send_polls = null;
    public ?bool $can_send_other_messages = null;
    public ?bool $can_add_web_page_previews = null;
    public ?int $until_date = null;
}
