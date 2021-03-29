<?php
 spl_autoload_register(function($class){

     $class = str_replace('\\', '/', $class);
     var_dump($class);
 
     require $class.'.php';
  }
);

require 'config/DB.php';

use Src\Community;
use Src\Tile;
use Src\Land;
use Src\Player;

$tile0 = new Tile('truc', 200);
$tile2 = new Tile('truc', 200);
$tile3 = new Tile('truc', 200);
$tile4 = new Tile('truc', 200);
$tile5 = new Tile('truc', 200);
$tile6 = new Tile('truc', 200);
$land = new Land('truc', 200, 400);

var_dump($tile0);
var_dump($tile5);
var_dump($land);

$mikkoku =new Player('Mikkoku');
var_dump($mikkoku);

 echo $mikkoku->movePawn(7). '<br/>';
var_dump($mikkoku);

echo $mikkoku->buyLand($land). '<br/>';
var_dump($mikkoku);

$communityCards = new DB();
$communityCards = DB::query('SELECT * FROM community_chest');

$communityChest = [];


foreach($communityCards as $index=>$communityCard){

    var_dump($communityCard);

    $communityCardProps = get_object_vars ($communityCard);
    $cardnumber = 'community'.$index;
    var_dump($cardnumber);
    $card = new Community($communityCardProps);
    $communityChest[] = [$cardnumber => $card];

}



// $com = new Community(
//     $communityCards[0]->effect,
//     $communityCards[0]->value,
//     $communityCards[0]->description,
//     $communityCards[0]->isGain,
// );

var_dump($communityChest);