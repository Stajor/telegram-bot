<?php
require 'vendor/autoload.php';

$token = '[BOT token]';
$api = new \Telegram\Bot\Api($token);

/* Set webhook url handler */
$api->setWebhook(['url' => 'https://mysite.com/handler']);

/* Print webhook info */
print_r($api->getWebhookInfo());

/* Delete webhook */
$api->deleteWebhook();
