<?php namespace Telegram\Bot\Types;

abstract class KeyboardAbstract {
    protected $buttonClass;
    protected $markupKey;
    protected $keyboards = [];

    public function addRow(array $buttons) {
        if (!is_int(key($buttons))) {
            $buttons = [$buttons];
        }

        $buttons = array_map(function(array $button) {
            return new $this->buttonClass($button);
        }, $buttons);

        $this->keyboards[] = $buttons;
    }

    public function __toString() {
        $properties = get_class_vars($this->buttonClass);

        $buttons = array_map(function($keyboards) use ($properties) {
            return array_map(function($keyboard) use ($properties) {
                $data = [];

                foreach (array_keys($properties) AS $property) {
                    if (!is_null($keyboard->{$property})) {
                        $data[$property] = $keyboard->{$property};
                    }
                }

                return $data;
            }, $keyboards);
        }, $this->keyboards);

        return json_encode([$this->markupKey => $buttons]);
    }
}