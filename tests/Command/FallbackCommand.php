<?php namespace Telegram\Bot\Test\Command;

use Telegram\Bot\Command;

class FallbackCommand extends Command {
    protected $name = "fallback";
    protected $description = "Fallback Command";

    public function handle() {}
}