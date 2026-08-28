<?php

require_once("Animal.php");

class Cachorro extends Animal{

    public function latir(){
        $latindo = "AAUAUUAUAUAUAUAU!";
        return $latindo;
    }
}