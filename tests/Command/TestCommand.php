<?php namespace Telegram\Bot\Test\Command;

use Telegram\Bot\Command;

class TestCommand extends Command {
    protected $name = "test";
    protected $description = "Test Command";

    public function handle() {}
}