<?php
namespace Src;

class Card{
    public $id;
    public $effect;
    public $value;
    public $description;
    public $isGain;
    public $devise;

    public function __construct($props, $board){
        $this->id = intval($props['id']);
        $this->effect = $props['effect'];
        if($props['value'] == null){
            $value = null;
        }else{
            $value = intval($props['value']);
        };
        $this->value = $value;
        $this->devise = $board->devise;

        if($value == null){
            $description = $props['description'].'.';
        }else{
            $description = $props['description'].' '. $this->value. ' '.$this->devise.'.';
        }
        $this->description = $description;
        $this->isGain = boolval($props['isGain']);
    }
}