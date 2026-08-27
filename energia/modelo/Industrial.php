<?php

require_once("IConsumidor.php");

class Industrial implements IConsumidor{
    private $consumo;

    public function getValorFatura(){
        if ($this->consumo <= 500) {
            return $this->consumo * 1.80;
        }else{
            $excedeu = ($this->consumo - 500) * 2.30;
            $cem = 500 * 1.80;

            return $excedeu + $cem;
        }
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