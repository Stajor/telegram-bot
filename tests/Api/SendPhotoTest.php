<?php namespace Telegram\Bot\Test\Api;

use Telegram\Bot\Types\Message;

class SendPhotoTest extends ApiTestCase {
    protected static $message;

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        self::$message = self::$api->sendPhoto(['chat_id' => 123, 'photo' => 'pixel.png']);
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
}