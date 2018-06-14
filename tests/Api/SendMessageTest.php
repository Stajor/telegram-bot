<?php namespace Telegram\Bot\Test\Api;

use Telegram\Bot\Types\ForceReply;
use Telegram\Bot\Types\InlineKeyboardMarkup;
use Telegram\Bot\Types\Message;
use Telegram\Bot\Types\ReplyKeyboardMarkup;
use Telegram\Bot\Types\ReplyKeyboardRemove;

class SendMessageTest extends ApiTestCase {
    protected static $message;

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        self::$message = self::$api->sendMessage(['chat_id' => 123, 'text' => 'test message']);
    }

    public function provider() {
        return [
            ['message_id'],
            ['from'],
            ['date'],
            ['chat'],
            ['forward_from'],
            ['forward_from_chat'],
            ['forward_from_message_id'],
            ['forward_signature'],
            ['forward_date'],
            ['reply_to_message'],
            ['edit_date'],
            ['media_group_id'],
            ['author_signature'],
            ['text'],
            ['entities'],
            ['caption_entities'],
            ['audio'],
            ['document'],
            ['game'],
            ['photo'],
            ['sticker'],
            ['video'],
            ['voice'],
            ['video_note'],
            ['caption'],
            ['contact'],
            ['location'],
            ['venue'],
            ['new_chat_members'],
            ['left_chat_member'],
            ['new_chat_title'],
            ['new_chat_photo'],
            ['delete_chat_photo'],
            ['group_chat_created'],
            ['supergroup_chat_created'],
            ['channel_chat_created'],
            ['migrate_to_chat_id'],
            ['migrate_from_chat_id'],
            ['pinned_message'],
            ['invoice'],
            ['successful_payment'],
            ['connected_website']
        ];
    }

    public function testHasInstanceOfMessage() {
        $this->assertInstanceOf(Message::class, self::$message);
    }

    /**
     * @dataProvider provider
     * @param $attribute
     */
    public function testHasAttribute($attribute) {
        $this->assertObjectHasAttribute($attribute, self::$message);
    }

    public function testInlineKeyboard() {
        $markup = new InlineKeyboardMarkup();
        $markup->addRow(['text' => 'First button', 'callback_data' => '1']);
        $markup->addRow([
            ['text' => 'Second button', 'callback_data' => '2'],
            ['text' => 'Third button', 'url' => 'https://apple.com']
        ]);

        $message = self::$api->sendMessage([
            'chat_id' => 123, 'text' => 'Inline Buttons', 'reply_markup' => $markup
        ]);

        $this->assertInstanceOf(Message::class, $message);
    }

    public function testReplyKeyboard() {
        $markup = new ReplyKeyboardMarkup();
        $markup->addRow(['text' => 'First button']);
        $markup->addRow([['text' => 'Second button'], ['text' => 'Third button']]);

        $message = self::$api->sendMessage([
            'chat_id' => 123, 'text' => 'Reply Buttons', 'reply_markup' => $markup
        ]);

        $this->assertInstanceOf(Message::class, $message);
    }

    public function testReplyRemoveKeyboard() {
        $markup = new ReplyKeyboardRemove(['remove_keyboard' => true]);
        $message = self::$api->sendMessage([
            'chat_id' => 123, 'text' => 'Reply Remove Buttons', 'reply_markup' => $markup
        ]);

        $this->assertInstanceOf(Message::class, $message);
    }

    public function testForceReplyKeyboard() {
        $markup = new ForceReply(['force_reply' => true]);
        $message = self::$api->sendMessage([
            'chat_id' => 123, 'text' => 'Force Reply Buttons', 'reply_markup' => $markup
        ]);

        $this->assertInstanceOf(Message::class, $message);
    }
}