<?php require_once './vendor/autoload.php';

use \GuzzleHttp\Client;
use \Dotenv\Dotenv;

$client = new Client();
$dotenv = Dotenv::create(__DIR__);
$dotenv->load();



//$api = new \Telegram\Bot\Api(getenv('BOT_TOKEN'));
//$response = $api->sendPhoto(['chat_id' => getenv('CHAT_ID'), 'photo' => fopen(dirname(__FILE__).'/pixel.png', 'rb')]);
//
//var_dump($response);
//exit();
//$method = 'getWebhookInfo';
//$params = [];
//
//try {
//    $response = $client->request('POST', "https://api.telegram.org/bot".getenv('BOT_TOKEN')."/{$method}", [
//        'form_params' => $params
//    ]);
//    echo $response->getBody()."\n";
//} catch (Exception $e) {
//    echo 'Exception: '.get_class($e)."\n";
//    echo $e->getMessage()."\n";
//}
