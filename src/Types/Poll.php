<?php namespace Telegram\Bot\Types;

use Telegram\Bot\Type;

class Poll extends Type {
    protected array $meta = [
        'options'               => PollOption::class,
        'explanation_entities'  => MessageEntity::class
    ];

    public string $id;
    public string $question;
    public array $options;
    public int $total_voter_count;
    public bool $is_closed;
    public bool $is_anonymous;
    public string $type;
    public bool $allows_multiple_answers;
    public int $correct_option_id;
    public string $explanation;
    public array $explanation_entities;
    public int $open_period;
    public int $close_date;
}
