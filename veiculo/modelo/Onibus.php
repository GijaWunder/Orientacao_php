<?php

require_once("CarroPasseio.php");

class Onibus extends CarroPasseio{
    protected int $pesoMax;


    public function getDados(){
        $dados = "Modelo: " . $this->modelo . " | Velocidade: " . $this->velocidade . " | Cor: " . $this->cor . " | Passageiros: " . $this->qtdPassageiros . " | Peso maximo: " . $this->pesoMax . "\n";
        return $dados;
    }


    /**
     * Get the value of pesoMax
     */
    public function getPesoMax(): int
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax(int $pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}