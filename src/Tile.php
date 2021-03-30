<?php

namespace Src;

class Tile{
    public $id;
    public $name;
    public $isOwned = false;
    public static $board = [];

    public function __construct($name, $id){
        $this->name = $name;
        $this->id = $id;
        self::$board[] = $this;
    }
}