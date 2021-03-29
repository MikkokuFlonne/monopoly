<?php

namespace Src;

class Tile{
    public $id;
    public $name;
    public $isOwned = false;
    public $pay;
    public static $increment = 0;
    public static $board = [];

    public function __construct($name, $pay){
        $this->name = $name;
        $this->pay = $pay;
        $this->id = ++self::$increment;
        self::$board[] = $this->id;
    }
}