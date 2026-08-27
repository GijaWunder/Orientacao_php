<?php

require_once("IGuerreiro.php");

class Goku implements IGuerreiro{
    private $ataques =['Kamehameha!', 'Genki Dama!', 'Kiai!'];

    public function atacar(){
        return $this->ataques[array_rand($this->ataques)];
    }

    public function transformar(){
    
    }
}

