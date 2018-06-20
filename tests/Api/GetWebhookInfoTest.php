<?php namespace Telegram\Bot\Test\Api;

use Telegram\Bot\Types\WebhookInfo;

class GetWebhookInfoTest extends ApiTestCase {
    protected static $webhook;

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        self::$webhook = self::$api->getWebhookInfo();
    }

    public function provider() {
        return [
            ['url'], ['has_custom_certificate'], ['pending_update_count'], ['last_error_date'], ['last_error_message'],
            ['max_connections'], ['allowed_updates']
        ];
    }

    public function testHasInstanceOfWebhookInfo() {
        $this->assertInstanceOf(WebhookInfo::class, self::$webhook);
    }

    /**
     * @dataProvider provider
     * @param $attribute
     */
    public function testHasAttribute($attribute) {
        $this->assertObjectHasAttribute($attribute, self::$webhook);
    }
}