# PHP Telgram Bot API

PHP wrapper for [Telegram's Bot API](https://core.telegram.org/bots/api).

![Minimal PHP version](https://img.shields.io/packagist/php-v/stajor/telegram-bot.svg)
[![Build Status](https://api.travis-ci.org/Stajor/telegram-bot.svg?branch=master)](https://travis-ci.org/Stajor/telegram-bot)

## Installation

Add this line to your application's composer.json:

```json
{
    "require": {
        "stajor/telegram-bot": "^3.0"
    }
}
```
and run `composer update`

**Or** run this command in your command line:

    $ composer require stajor/telegram-bot
    
## Telegram API support
All types and methods of the Telegram Bot API 3.6 are supported.

## Configuration
First of all you need create your own bot and obtain a token

[How do I create a bot?](https://core.telegram.org/bots#3-how-do-i-create-a-bot)
    
    
## Usage

You can use **Telegram::Bot::Api** standalone


```php
<?php

$api = new \Telegram\Bot\Api('BOT TOKEN');
$user = $api->getMe();
```

Or by using **CommandsHandler** to receive updates from Telegram

Create command class

```php
<?php

use Telegram\Bot\Command;

class StartCommand extends Command {
    /**
     * @var string Command Name
     */
    protected $name = "start";

    /**
     * @var string Command Description
     */
    protected $description = "Start Command to get you started";

    /**
     * @inheritdoc
     */
    public function handle() {
        // This will send a message using `sendMessage`
        $this->replyWithMessage(['text' => 'Welcome to my Bot']);
        
        // Trigger another command dynamically from within this command
        $this->triggerCommand('help');
    }
}
```

In your controller add

```php
<?php
       
$handler = new CommandsHandler('BOT TOKEN');
$handler->addCommand(StartCommand::class);
$handler->handle();
```

#### Send Photo
```php
$api = new \Telegram\Bot\Api('BOT TOKEN');
$api->sendPhoto(['chat_id' => 123,'photo' => fopen('path_to_photo', 'rb')]);
```

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/Stajor/telegram-bot. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant](http://contributor-covenant.org) code of conduct.

## License

The gem is available as open source under the terms of the [MIT License](https://opensource.org/licenses/MIT).
