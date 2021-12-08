<?php namespace Telegram\Bot;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Stream;
use Telegram\Bot\Exceptions\ResponseException;
use Telegram\Bot\Types\BotCommand;
use Telegram\Bot\Types\Chat;
use Telegram\Bot\Types\ChatInviteLink;
use Telegram\Bot\Types\ChatMember;
use Telegram\Bot\Types\File;
use Telegram\Bot\Types\GameHighScore;
use Telegram\Bot\Types\Message;
use Telegram\Bot\Types\MessageId;
use Telegram\Bot\Types\Poll;
use Telegram\Bot\Types\StickerSet;
use Telegram\Bot\Types\Update;
use Telegram\Bot\Types\User;
use GuzzleHttp\Client;
use Telegram\Bot\Types\UserProfilePhotos;
use Telegram\Bot\Types\WebhookInfo;

/**
 * @method User getMe()
 * @method bool logOut()
 * @method bool close()
 * @method Update[] getUpdates(array $params)
 * @method bool setWebhook(array $params)
 * @method bool deleteWebhook()
 * @method WebhookInfo getWebhookInfo()
 * @method Message sendMessage(array $params)
 * @method Message forwardMessage(array $params)
 * @method MessageId copyMessage(array $params)
 * @method Message editMessageText(array $params)
 * @method Message editMessageCaption(array $params)
 * @method Message editMessageReplyMarkup(array $params)
 * @method bool deleteMessage(array $params)
 * @method Message sendPhoto(array $params)
 * @method Message sendAudio(array $params)
 * @method Message sendDocument(array $params)
 * @method Message sendVideo(array $params)
 * @method Message sendVoice(array $params)
 * @method Message sendVideoNote(array $params)
 * @method Message sendMediaGroup(array $params)
 * @method Message sendLocation(array $params)
 * @method Message editMessageLiveLocation(array $params)
 * @method Message stopMessageLiveLocation(array $params)
 * @method Message sendVenue(array $params)
 * @method Message sendContact(array $params)
 * @method Message sendPoll(array $params)
 * @method Poll stopPoll(array $params)
 * @method Message sendDice(array $params)
 * @method bool sendChatAction(array $params)
 * @method UserProfilePhotos getUserProfilePhotos(array $params)
 * @method File getFile(array $params)
 * @method bool kickChatMember(array $params)
 * @method bool unbanChatMember(array $params)
 * @method bool restrictChatMember(array $params)
 * @method bool promoteChatMember(array $params)
 * @method string exportChatInviteLink(array $params)
 * @method bool setChatPhoto(array $params)
 * @method ChatInviteLink createChatInviteLink(array $params)
 * @method ChatInviteLink editChatInviteLink(array $params)
 * @method ChatInviteLink revokeChatInviteLink(array $params)
 * @method bool deleteChatPhoto(array $params)
 * @method bool setChatTitle(array $params)
 * @method bool setChatDescription(array $params)
 * @method bool pinChatMessage(array $params)
 * @method bool unpinChatMessage(array $params)
 * @method bool unpinAllChatMessages(array $params)
 * @method bool leaveChat(array $params)
 * @method Chat getChat(array $params)
 * @method bool setChatPermissions(array $params)
 * @method ChatMember[] getChatAdministrators(array $params)
 * @method bool setChatAdministratorCustomTitle(array $params)
 * @method int getChatMembersCount(array $params)
 * @method ChatMember getChatMember(array $params)
 * @method bool setChatStickerSet(array $params)
 * @method bool deleteChatStickerSet(array $params)
 * @method bool answerCallbackQuery(array $params)
 * @method bool answerInlineQuery(array $params)
 * @method Message editMessageMedia(array $params)
 * @method Message sendAnimation(array $params)
 * @method bool setMyCommands(array $params)
 * @method BotCommand[] getMyCommands()
 * @method bool deleteMyCommands(array $params)
 * @method Message sendSticker(array $params)
 * @method StickerSet getStickerSet(array $params)
 * @method File uploadStickerFile(array $params)
 * @method bool createNewStickerSet(array $params)
 * @method bool addStickerToSet(array $params)
 * @method bool setStickerPositionInSet(array $params)
 * @method bool deleteStickerFromSet(array $params)
 * @method bool setStickerSetThumb(array $params)
 * @method Message sendInvoice(array $params)
 * @method bool answerShippingQuery(array $params)
 * @method bool answerPreCheckoutQuery(array $params)
 * @method bool setPassportDataErrors(array $params)
 * @method Message sendGame(array $params)
 * @method bool setGameScore(array $params)
 * @method GameHighScore[] getGameHighScores(array $params)
 * @method bool approveChatJoinRequest(array $params)
 * @method bool declineChatJoinRequest(array $params)
 */
class Api {
    const API_URL = 'https://api.telegram.org';

    protected string $token;
    protected ?ClientInterface $client;
    protected array $methods = [
        'getMe' => ['return' => User::class],
        'logOut' => [],
        'close' => [],
        'getUpdates' => ['return' => Update::class, 'array' => true],
        'setWebhook' => [],
        'deleteWebhook' => [],
        'getWebhookInfo' => ['return' => WebhookInfo::class],
        'sendMessage' => ['return' => Message::class],
        'forwardMessage' => ['return' => Message::class],
        'editMessageText' => ['return' => Message::class],
        'editMessageCaption' => ['return' => Message::class],
        'editMessageReplyMarkup' => ['return' => Message::class],
        'deleteMessage' => [],
        'copyMessage' => ['return' => MessageId::class],
        'sendPhoto' => ['return' => Message::class],
        'sendAudio' => ['return' => Message::class],
        'sendDocument' => ['return' => Message::class],
        'sendVideo' => ['return' => Message::class],
        'sendVoice' => ['return' => Message::class],
        'sendVideoNote' => ['return' => Message::class],
        'sendMediaGroup' => ['return' => Message::class],
        'sendLocation' => ['return' => Message::class],
        'editMessageLiveLocation' => ['return' => Message::class],
        'stopMessageLiveLocation' => ['return' => Message::class],
        'sendVenue' => ['return' => Message::class],
        'sendContact' => ['return' => Message::class],
        'sendPoll' => ['return' => Message::class],
        'stopPoll' => ['return' => Poll::class],
        'sendDice' => ['return' => Message::class],
        'sendChatAction' => [],
        'getUserProfilePhotos' => ['return' => UserProfilePhotos::class],
        'getFile' => ['return' => File::class],
        'kickChatMember' => [],
        'unbanChatMember' => [],
        'restrictChatMember' => [],
        'promoteChatMember' => [],
        'exportChatInviteLink' => [],
        'setChatPhoto' => [],
        'deleteChatPhoto' => [],
        'setChatTitle' => [],
        'setChatDescription' => [],
        'pinChatMessage' => [],
        'unpinChatMessage' => [],
        'unpinAllChatMessages' => [],
        'leaveChat' => [],
        'getChat' => ['return' => Chat::class],
        'setChatPermissions' => [],
        'getChatAdministrators' => ['return' => ChatMember::class, 'array' => true],
        'setChatAdministratorCustomTitle' => [],
        'getChatMembersCount' => [],
        'getChatMember' => ['return' => ChatMember::class],
        'setChatStickerSet' => [],
        'deleteChatStickerSet' => [],
        'answerCallbackQuery' => [],
        'answerInlineQuery' => [],
        'editMessageMedia' => ['return' => Message::class],
        'sendAnimation' => ['return' => Message::class],
        'setMyCommands' => [],
        'getMyCommands' => ['return' => BotCommand::class, 'array' => true],
        'deleteMyCommands' => [],
        'sendSticker' => ['return' => Message::class],
        'getStickerSet' => ['return' => StickerSet::class],
        'uploadStickerFile' => ['return' => File::class],
        'createNewStickerSet' => [],
        'addStickerToSet' => [],
        'setStickerPositionInSet' => [],
        'deleteStickerFromSet' => [],
        'setStickerSetThumb' => [],
        'sendInvoice' => ['return' => Message::class],
        'answerShippingQuery' => [],
        'answerPreCheckoutQuery' => [],
        'setPassportDataErrors' => [],
        'sendGame' => ['return' => Message::class],
        'setGameScore' => [],
        'getGameHighScores' => ['return' => GameHighScore::class, 'array' => true],
        'approveChatJoinRequest' => [],
        'declineChatJoinRequest' => []
    ];

    /**
     * Api constructor.
     * @param string $token
     * @param ClientInterface|null $client
     */
    public function __construct(string $token, ClientInterface $client = null) {
        $this->token    = $token;
        $this->client   = $client;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws GuzzleException
     * @throws ResponseException
     */
    public function __call($name, $arguments) {
        return $this->request($name, $arguments[0] ?? []);
    }

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     * @throws ResponseException|GuzzleException
     */
    public function request(string $method, array $params = []) {
        $result = $this->getClient()->post(self::API_URL."/bot{$this->token}/{$method}", $this->prepareParams($params));
        $data   = json_decode($result->getBody(), true);

        if (!$data['ok']) {
            throw new ResponseException($data['description'], $data['error_code']);
        }

        $type       = $this->methods[$method]['return'] ?? null;
        $isArray    = $this->methods[$method]['array'] ?? null;

        if (!is_null($type) && $isArray)  {
            return array_map(function($row) use ($type) {
                return new $type($row);
            }, $data['result']);
        } else {
            return is_null($type) ? $data['result'] : new $type($data['result']);
        }
    }

    protected function prepareParams(array $params): array {
        $hasResource    = false;
        $multipart      = [];

        if (isset($params['reply_markup']) && !empty($params['reply_markup'])) {
            $params['reply_markup'] = (string)$params['reply_markup'];
        }

        foreach ($params AS $key => $value) {
            $hasResource    |= (is_resource($value) || $value instanceof Stream);
            $multipart[]    = ['name' => $key, 'contents' => $value];
        }

        if ($hasResource) {
            return ['multipart' => $multipart];
        } else {
            return ['form_params' => $params];
        }
    }

    protected function getClient(): Client {
        if (empty($this->client)) {
            $this->client = new Client([
                'http_errors' => false
            ]);
        }

        return $this->client;
    }
}
