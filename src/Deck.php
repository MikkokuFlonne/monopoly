<?php

namespace Src;
class Deck{
    public $deck = [];
    public $name;

    public function __construct($name, $deck = []){
        $this->name = $name;
        $this->deck = $deck;
    }

    public function addCard($card){
        return $this->deck[] = $card;
    }




}