<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class WebhookInfo extends Type {
    public $url;
    public $has_custom_certificate;
    public $pending_update_count;
    public $last_error_date;
    public $last_error_message;
    public $max_connections;
    public $allowed_updates;
}