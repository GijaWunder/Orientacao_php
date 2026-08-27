<?php

require_once("IConsumidor.php");

class Comercial implements IConsumidor{
    private $consumo;

    public function getValorFatura(){
        if ($this->consumo <= 100) {
            return $this->consumo * 1.45;
        }else{ //else é opcional
            $excedeu = ($this->consumo - 100) * 1.60;
            $cem = 100 * 1.45;

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
