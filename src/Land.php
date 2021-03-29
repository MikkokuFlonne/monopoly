<?php 

namespace Src;

class Land extends Tile{
    public $price;
    public $houses = 0;
    public $hotels= 0;
    public $owner = '';

    public function __construct($name, $price, $rent){
        parent::__construct($name, $rent);
        $this->price = $price;
        $this->pay = $rent;
    }

}