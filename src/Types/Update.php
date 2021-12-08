<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Update extends Type {
    protected array $meta = [
        'message'               => Message::class,
        'edited_message'        => Message::class,
        'channel_post'          => Message::class,
        'edited_channel_post'   => Message::class,
        'inline_query'          => InlineQuery::class,
        'chosen_inline_result'  => ChosenInlineResult::class,
        'callback_query'        => CallbackQuery::class,
        'shipping_query'        => ShippingQuery::class,
        'pre_checkout_query'    => PreCheckoutQuery::class,
        'poll'                  => Poll::class,
        'poll_answer'           => PollAnswer::class,
        'my_chat_member'        => ChatMemberUpdated::class,
        'chat_member'           => ChatMemberUpdated::class,
        'chat_join_request'     => ChatJoinRequest::class
    ];

    public int $update_id;
    public ?Message $message = null;
    public ?Message $edited_message = null;
    public ?Message $channel_post = null;
    public ?Message $edited_channel_post = null;
    public ?InlineQuery $inline_query = null;
    public ?ChosenInlineResult $chosen_inline_result = null;
    public ?CallbackQuery $callback_query = null;
    public ?ShippingQuery $shipping_query = null;
    public ?PreCheckoutQuery $pre_checkout_query = null;
    public ?Poll $poll = null;
    public ?PollAnswer $poll_answer = null;
    public ?ChatMemberUpdated $my_chat_member = null;
    public ?ChatMemberUpdated $chat_member = null;
    public ?ChatJoinRequest $chat_join_request = null;
}
