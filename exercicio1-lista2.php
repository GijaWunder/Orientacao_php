<?php

class Veiculo{
    private $capacidade;
    private $passagensVendidas;


    public function venderPassagens($quantidade){

    }


    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passagensVendidas
     */
    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    /**
     * Set the value of passagensVendidas
     */
    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}

$passagem = new Veiculo();
$passagem->setCapacidade(readline("Qual é a capacidade do veiculo? "));
$passagem->setPassagensVendidas(readline("Quantas passagens voce deseja comprar? "));

if ($passagem->getPassagensVendidas() == 0 ) {
    return 0;
}