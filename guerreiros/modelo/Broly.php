<?php

require_once("IGuerreiro.php");

class Broly implements IGuerreiro{
    private $ataques =['Omega Blaster!', 'Eraser Cannon!', '!'];

    public function atacar(){
        return $this->ataques[array_rand($this->ataques)];
    }

    public function transformar(){
    
    }
}