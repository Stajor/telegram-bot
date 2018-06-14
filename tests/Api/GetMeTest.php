<?php namespace Telegram\Bot\Test\Api;

use Telegram\Bot\Types\User;

class GetMeTest extends ApiTestCase {
    protected static $user;

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        self::$user = self::$api->getMe();
    }

    public function provider() {
        return [['id'], ['is_bot'], ['first_name'], ['last_name'], ['username'], ['language_code']];
    }

    public function testHasInstanceOfUser() {
        $this->assertInstanceOf(User::class, self::$user);
    }

    /**
     * @dataProvider provider
     * @param $attribute
     */
    public function testHasAttribute($attribute) {
        $this->assertObjectHasAttribute($attribute, self::$user);
    }
}