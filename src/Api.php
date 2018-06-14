<?php namespace Telegram\Bot;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use Telegram\Bot\Exceptions\ResponseException;
use Telegram\Bot\Types\Chat;
use Telegram\Bot\Types\ChatMember;
use Telegram\Bot\Types\File;
use Telegram\Bot\Types\Message;
use Telegram\Bot\Types\Update;
use Telegram\Bot\Types\User;
use GuzzleHttp\Client;
use Telegram\Bot\Types\UserProfilePhotos;
use Telegram\Bot\Types\WebhookInfo;

class Api {
    const API_URL = 'https://api.telegram.org';

    protected $token;
    protected $client;

    public function __construct(string $token, ClientInterface $client = null) {
        $this->token    = $token;
        $this->client   = is_null($client) ? new Client() : $client;
    }

    public function getMe(): User {
        return $this->request('getMe', [], User::class);
    }

    public function getUpdates(array $params): array {
        return $this->request('getUpdates', $params, Update::class, true);
    }

    public function setWebhook(array $params): bool {
        return $this->request('setWebhook', $params);
    }

    public function deleteWebhook(): bool {
        return $this->request('deleteWebhook');
    }

    public function getWebhookInfo(): WebhookInfo {
        return $this->request('getWebhookInfo');
    }

    public function sendMessage(array $params): Message {
        return $this->request('sendMessage', $params, Message::class);
    }

    public function forwardMessage(array $params): Message {
        return $this->request('forwardMessage', $params, Message::class);
    }

    public function editMessageText(array $params): Message {
        return $this->request('editMessageText', $params, Message::class);
    }

    public function editMessageCaption(array $params): Message {
        return $this->request('editMessageCaption', $params, Message::class);
    }

    public function editMessageReplyMarkup(array $params): Message {
        return $this->request('editMessageReplyMarkup', $params, Message::class);
    }

    public function deleteMessage(array $params): bool {
        return $this->request('deleteMessage', $params);
    }

    public function sendPhoto(array $params): Message {
        return $this->request('sendPhoto', $params, Message::class);
    }

    public function sendAudio(array $params): Message {
        return $this->request('sendAudio', $params, Message::class);
    }

    public function sendDocument(array $params): Message {
        return $this->request('sendDocument', $params, Message::class);
    }

    public function sendVideo(array $params): Message {
        return $this->request('sendVideo', $params, Message::class);
    }

    public function sendVoice(array $params): Message {
        return $this->request('sendVoice', $params, Message::class);
    }

    public function sendVideoNote(array $params): Message {
        return $this->request('sendVideoNote', $params, Message::class);
    }

    public function sendMediaGroup(array $params): Message {
        return $this->request('sendMediaGroup', $params, Message::class);
    }

    public function sendLocation(array $params): Message {
        return $this->request('sendLocation', $params, Message::class);
    }

    public function editMessageLiveLocation(array $params): Message {
        return $this->request('editMessageLiveLocation', $params, Message::class);
    }

    public function stopMessageLiveLocation(array $params): Message {
        return $this->request('stopMessageLiveLocation', $params, Message::class);
    }

    public function sendVenue(array $params): Message {
        return $this->request('sendVenue', $params, Message::class);
    }

    public function sendContact(array $params): Message {
        return $this->request('sendContact', $params, Message::class);
    }

    public function sendChatAction(array $params): bool {
        return $this->request('sendChatAction', $params);
    }

    public function getUserProfilePhotos(array $params): UserProfilePhotos {
        return $this->request('getUserProfilePhotos', $params, UserProfilePhotos::class);
    }

    public function getFile(array $params): File {
        return $this->request('getFile', $params, File::class);
    }

    public function kickChatMember(array $params): bool {
        return $this->request('kickChatMember', $params);
    }

    public function unbanChatMember(array $params): bool {
        return $this->request('unbanChatMember', $params);
    }

    public function restrictChatMember(array $params): bool {
        return $this->request('restrictChatMember', $params);
    }

    public function promoteChatMember(array $params): bool {
        return $this->request('promoteChatMember', $params);
    }

    public function exportChatInviteLink(array $params): string {
        return $this->request('exportChatInviteLink', $params);
    }

    public function setChatPhoto(array $params): bool {
        return $this->request('setChatPhoto', $params);
    }

    public function deleteChatPhoto(array $params): bool {
        return $this->request('deleteChatPhoto', $params);
    }

    public function setChatTitle(array $params): bool {
        return $this->request('setChatTitle', $params);
    }

    public function setChatDescription(array $params): bool {
        return $this->request('setChatDescription', $params);
    }

    public function pinChatMessage(array $params): bool {
        return $this->request('pinChatMessage', $params);
    }

    public function unpinChatMessage(array $params): bool {
        return $this->request('unpinChatMessage', $params);
    }

    public function leaveChat(array $params): bool {
        return $this->request('leaveChat', $params);
    }

    public function getChat(array $params): Chat {
        return $this->request('getChat', $params, Chat::class);
    }

    public function getChatAdministrators(array $params): array {
        return $this->request('getChatAdministrators', $params, ChatMember::class, true);
    }

    public function getChatMembersCount(array $params): int {
        return $this->request('getChatMembersCount', $params);
    }

    public function getChatMember(array $params): ChatMember {
        return $this->request('getChatMember', $params, ChatMember::class);
    }

    public function setChatStickerSet(array $params): bool {
        return $this->request('setChatStickerSet', $params);
    }

    public function deleteChatStickerSet(array $params): bool {
        return $this->request('deleteChatStickerSet', $params);
    }

    public function answerCallbackQuery(array $params): bool {
        return $this->request('answerCallbackQuery', $params);
    }

    public function answerInlineQuery(array $params): bool {
        return $this->request('answerInlineQuery', $params);
    }

    public function request(string $method, array $params = [], $type = null, $isArray = false) {
        if (isset($params['reply_markup']) && !empty($params['reply_markup'])) {
            $params['reply_markup'] = (string)$params['reply_markup'];
        }

        try {
            $result = $this->client->request('POST', self::API_URL."/bot{$this->token}/{$method}", ['form_params' => $params]);
        } catch (ClientException $e) {
            if (strpos($e->getMessage(), 'response:') !== false) {
                $ex = explode('response:', $e->getMessage());
                $response = json_decode(trim(end($ex)));

                throw new ResponseException($response->description, $response->error_code);
            } else {
                throw $e;
            }
        }

        $data = json_decode($result->getBody(), true);

        if (!is_null($type) && $isArray)  {
            return array_map(function($row) use ($type) {
                return new $type($row);
            }, $data['result']);
        } else {
            return is_null($type) ? $data['result'] : new $type($data['result']);
        }

    }
}