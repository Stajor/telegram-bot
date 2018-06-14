<?php namespace Telegram\Bot\Types;

class InlineKeyboardMarkup extends KeyboardAbstract {
    protected $buttonClass = InlineKeyboardButton::class;
    protected $markupKey = 'inline_keyboard';
}