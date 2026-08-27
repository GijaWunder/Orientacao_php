<?php

require_once("IConsumidor.php");

class Residencial implements IConsumidor{
    private $consumo;

    public function getValorFatura(){
        return $this->consumo * 1.05;
    }

    /**
     * Get the value of consumo
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     */
    public function setConsumo($consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}