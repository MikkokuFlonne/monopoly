<?php

namespace Src;

class Board{
    private static $tiles=[];
    public $devise;
    public $theme;

    public function __construct($devise, $theme){
        $this->devise = $devise;
        $this->theme = $theme;
    }
}