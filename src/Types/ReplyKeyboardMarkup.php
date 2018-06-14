<?php namespace Telegram\Bot\Types;

class ReplyKeyboardMarkup extends KeyboardAbstract {
    protected $buttonClass = KeyboardButton::class;
    protected $markupKey = 'keyboard';
}