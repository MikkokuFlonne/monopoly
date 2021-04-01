<?php
 spl_autoload_register(function($class){

     $class = str_replace('\\', '/', $class);
     var_dump($class);
 
     require $class.'.php';
  }
);

require 'config/DB.php';

use Src\Card;
use Src\Tile;
use Src\Land;
use Src\Player;
use Src\Deck;
use Src\Board;

$board = new Board('Kamas', 'Wakfu');


$mikkoku =new Player('Mikkoku');
var_dump($mikkoku);


$communityCards = DB::query('SELECT * FROM community_chest');

$communityDeck = new Deck('Caisse de Communauté');


foreach($communityCards as $index=>$communityCard){

    $communityCardProps = get_object_vars ($communityCard);
    $cardnumber = 'community'.$index;
    $card = new Card($communityCardProps, $board);
    $communityDeck->addCard($card, $cardnumber);

}



var_dump($communityDeck);

$lands = DB::query('SELECT * FROM land');

foreach($lands as $land){

    $land = get_object_vars ($land);
    $landnumber = 'land'.$land['id'];

    
    
}

var_dump($communityDeck->shuffleDeck());
var_dump($communityDeck->deckUsed);

var_dump($communityDeck->drawCard($player));

var_dump($communityDeck->deckUsed);

