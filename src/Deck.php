<?php

namespace Src;
class Deck{
    public $deck = [];
    public $name;
    public $deckUsed;

    public function __construct($name, $deck = []){
        $this->name = $name;
        $this->deck = $deck;
    }

    public function addCard($card, $name){
        return $this->deck[$name] = $card;
    }

    public function shuffleDeck(){
        $this->deckUsed = $this->deck;
        shuffle($this->deckUsed);
        return $this->deckUsed;
    }

    public function drawCard($player){
        $cardDraw = array_shift($this->deckUsed);
        if($cardDraw->effect === 'outOfJail'){
            $player->card[] = $cardDraw;
            return $cardDraw;
        }else{
            $this->deckUsed[] = $cardDraw;
            return $cardDraw;
        }
    }




}