<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Sticker extends Type {
    protected array $meta = [
        'thumb'         => PhotoSize::class,
        'mask_position' => MaskPosition::class
    ];

    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public bool $is_animated;
    public bool $is_video;
    public ?PhotoSize $thumb;
    public ?string $emoji;
    public ?string $set_name;
    public ?MaskPosition $mask_position;
    public ?int $file_size;
}
