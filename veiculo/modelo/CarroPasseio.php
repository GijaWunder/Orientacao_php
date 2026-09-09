<?php

require_once("Veiculo.php");

class CarroPasseio extends Veiculo{
    protected int $qtdPassageiros;

    public function getDados(){
        $dados = "Modelo: " . $this->modelo . " | Velocidade: " . $this->velocidade . " | Cor: " . $this->cor . " | Passageiros: " . $this->qtdPassageiros .  "\n";
        return $dados;
    }

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros(): int
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros(int $qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }
}