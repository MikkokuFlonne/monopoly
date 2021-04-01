<?php
namespace Src;

class Player{
    public $id;
    public $pseudo;
    public $balance = 1500;
    public $lands = [];
    public $pawn = 0;
    public $devise;
    public $inJail = false;
    public $outOfJail = false;
    public $card = [];

    public function __construct($pseudo){
        $this->pseudo = $pseudo;
    }

    public function movePawn($die){
        $this->pawn += $die;
        return "Vous vous êtes déplacé sur la case numéro $this->pawn.";
    }

    public function buyLand($land){
        if($this->pawn === $land->id){
            if($this->balance > $land->price){
                $this->balance -= $land->price;
                $this->lands[] = $land;
                $land->isOwned = true;
                $land->owner = $this->pseudo;
                return "Vous avez acheté $land->name pour $land->price. Il vous reste $this->balance.";
            }
        }
    }

    public function buyHouse(){

    }
}