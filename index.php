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

// $tile0 = new Tile('truc', 200);
// $tile2 = new Tile('truc', 200);
// $tile3 = new Tile('truc', 200);
// $tile4 = new Tile('truc', 200);
// $tile5 = new Tile('truc', 200);
// $tile6 = new Tile('truc', 200);
// $land = new Land('truc', 200, 400);

// var_dump($tile0);
// var_dump($tile5);
// var_dump($land);

// $mikkoku =new Player('Mikkoku');
// var_dump($mikkoku);

//  echo $mikkoku->movePawn(7). '<br/>';
// var_dump($mikkoku);

// echo $mikkoku->buyLand($land). '<br/>';
// var_dump($mikkoku);

$communityCards = DB::query('SELECT * FROM community_chest');

$communityDeck = new Deck('Caisse de Communauté');


foreach($communityCards as $index=>$communityCard){

    $communityCardProps = get_object_vars ($communityCard);
    $cardnumber = 'community'.$index;
    $card = new Card($communityCardProps);
    $communityDeck->addCard($card);

}



var_dump($communityDeck);

$lands = DB::query('SELECT * FROM land');

foreach($lands as $land){

    $land = get_object_vars ($land);
    $landnumber = 'land'.$index;
    $deed = new Land($land);
    $deed::$board[]= $deed;

}

var_dump($deed::$board);