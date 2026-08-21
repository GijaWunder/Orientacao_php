<?php

require_once("IFormaGeomatrica.php");

class Circulo implements IFormaGeometrica{
    private $raio;

    public function getArea(){

    }
    
    public function getDesenho(){

    }

    /**
     * Get the value of raio
     */
    public function getRaio()
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}