<?php 

namespace Src;

class Land extends Tile{
    public $id;
    public $name;
    public $set;
    public $price;
    public $houses = 0;
    public $hotels= 0;
    public $owner = '';
    public $isMortgage = false;
    public $mortgage;
    public $rentOne;
    public $rentTwo;
    public $rentThree;
    public $rentFour;
    public $rendHotel;

    public function __construct($data){
        parent::__construct($data['name'], $data['id']);
        $this->price = intval($data['price']);
        $this->mortgage = $this->price/2;
        $this->rentOne = intval($data['rent_one_house']);
        $this->rentTwo = intval($data['rent_two_house']);
        $this->rentThree = intval($data['rent_three_house']);
        $this->rentFour = intval($data['rent_four_house']);
        $this->rentHotel = intval($data['rent_hotel']);
        $this->set = intval($data['set_id']);
    }

}