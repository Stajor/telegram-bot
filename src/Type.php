<?php namespace Telegram\Bot;

class Type {
    protected $meta = [];

    public function __construct(array $data) {
        foreach ($data AS $key => $value) {
            $this->add($key, $value);
        }
    }

    protected function add($key, $value) {
        if (property_exists($this, $key)) {
            // Check if value must be array of types
            if (is_array($value) && is_int(key($value)) && $this->meta[$key]) {
                $this->{$key} = array_map(function($row) use ($key) {
                    return new $this->meta[$key]($row);
                }, $value);
            } else {
                $this->{$key} = isset($this->meta[$key]) ? new $this->meta[$key]($value) : $value;
            }
        }
    }
}