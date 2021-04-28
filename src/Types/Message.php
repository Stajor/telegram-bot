<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Message extends Type {
    protected array $meta = [
        'chat'                              => Chat::class,
        'dice'                              => Dice::class,
        'from'                              => User::class,
        'forward_from'                      => User::class,
        'forward_from_chat'                 => Chat::class,
        'reply_to_message'                  => Message::class,
        'entities'                          => MessageEntity::class,
        'caption_entities'                  => MessageEntity::class,
        'audio'                             => Audio::class,
        'document'                          => Document::class,
        'game'                              => Game::class,
        'photo'                             => PhotoSize::class,
        'sticker'                           => Sticker::class,
        'video'                             => Video::class,
        'voice'                             => Voice::class,
        'video_note'                        => VideoNote::class,
        'contact'                           => Contact::class,
        'location'                          => Location::class,
        'venue'                             => Venue::class,
        'new_chat_members'                  => User::class,
        'left_chat_member'                  => User::class,
        'new_chat_photo'                    => PhotoSize::class,
        'pinned_message'                    => Message::class,
        'invoice'                           => Invoice::class,
        'sender_chat'                       => Chat::class,
        'successful_payment'                => SuccessfulPayment::class,
        'passport_data'                     => PassportData::class,
        'animation'                         => Animation::class,
        'via_bot'                           => User::class,
        'poll'                              => Poll::class,
        'message_auto_delete_timer_changed' => MessageAutoDeleteTimerChanged::class,
        'proximity_alert_triggered'         => ProximityAlertTriggered::class,
        'voice_chat_scheduled'              => VoiceChatScheduled::class,
        'voice_chat_started'                => VoiceChatStarted::class,
        'voice_chat_ended'                  => VoiceChatEnded::class,
        'voice_chat_participants_invited'   => VoiceChatParticipantsInvited::class,
        'reply_markup'                      => InlineKeyboardMarkup::class
    ];

    public int $message_id;
    public ?User $from = null;
    public ?Chat $sender_chat = null;
    public int $date;
    public Chat $chat;
    public ?User $forward_from = null;
    public ?Chat $forward_from_chat = null;
    public ?int $forward_from_message_id = null;
    public ?string $forward_signature = null;
    public ?string $forward_sender_name = null;
    public ?int $forward_date = null;
    public ?Message $reply_to_message = null;
    public ?User $via_bot = null;
    public ?int $edit_date = null;
    public ?string $media_group_id = null;
    public ?string $author_signature = null;
    public ?string $text = null;
    public ?array $entities = null;
    public ?Animation $animation = null;
    public ?Audio $audio = null;
    public ?Document $document = null;
    public ?array $photo = null;
    public ?Sticker $sticker = null;
    public ?Video $video = null;
    public ?VideoNote $video_note = null;
    public ?Voice $voice = null;
    public ?string $caption = null;
    public ?array $caption_entities = null;
    public ?Contact $contact = null;
    public ?Dice $dice = null;
    public ?Game $game = null;
    public ?Poll $poll = null;
    public ?Venue $venue = null;
    public ?Location $location = null;
    public ?array $new_chat_members = null;
    public ?User $left_chat_member = null;
    public ?string $new_chat_title = null;
    public ?array $new_chat_photo = null;
    public ?bool $delete_chat_photo = null;
    public ?bool $group_chat_created = null;
    public ?bool $supergroup_chat_created = null;
    public ?bool $channel_chat_created = null;
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;
    public ?int $migrate_to_chat_id = null;
    public ?int $migrate_from_chat_id = null;
    public ?Message $pinned_message = null;
    public ?Invoice $invoice = null;
    public ?SuccessfulPayment $successful_payment = null;
    public ?string $connected_website = null;
    public ?PassportData $passport_data = null;
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;
    public ?VoiceChatScheduled $voice_chat_scheduled = null;
    public ?VoiceChatStarted $voice_chat_started = null;
    public ?VoiceChatEnded $voice_chat_ended = null;
    public ?VoiceChatParticipantsInvited $voice_chat_participants_invited = null;
    public ?InlineKeyboardMarkup $reply_markup = null;
}
