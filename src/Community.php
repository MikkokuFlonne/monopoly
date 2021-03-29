<?php
namespace Src;

class Community{
    public $id;
    public $effect;
    public $value;
    public $description;
    public $isGain;

    public function __construct($props){
        $this->id = intval($props['id']);
        $this->effect = $props['effect'];
        $this->value = intval($props['value']);
        $this->description = $props['description'].' '. $this->value.'.';
        $this->isGain = boolval($props['isGain']);
    }
}