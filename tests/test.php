<?php require_once './vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();


$method = 'getMe';
$params = [];

try {
    $response = $client->request('POST', "https://api.telegram.org/bot".getenv('BOT_TOKEN')."/{$method}", [
        'form_params' => $params
    ]);
    echo $response->getBody()."\n";
} catch (Exception $e) {
    echo 'Exception: '.get_class($e)."\n";
    echo $e->getMessage()."\n";
}


$api = new \Telegram\Bot\Api('[bot token here]');