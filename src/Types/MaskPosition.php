<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class MaskPosition extends Type {
    public $point;
    public $x_shift;
    public $y_shift;
    public $scale;
}