<?php namespace Telegram\Bot\Types;

class PassportElementErrorDataField extends PassportElementError {
    public $field_name;
    public $data_hash;
}