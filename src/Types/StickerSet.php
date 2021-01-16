<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class StickerSet extends Type {
    protected array $meta = [
        'stickers'  => Sticker::class,
        'thumb'     => PhotoSize::class
    ];

    public string $name;
    public string $title;
    public bool $is_animated;
    public bool $contains_masks;
    public array $stickers;
    public PhotoSize $thumb;
}
