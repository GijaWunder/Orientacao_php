<?php

class Veiculo{
    protected string $modelo;
    protected int $velocidade;
    protected string $cor;


    /**
     * Get the value of modelo
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of velocidade
     */
    public function getVelocidade(): int
    {
        return $this->velocidade;
    }

    /**
     * Set the value of velocidade
     */
    public function setVelocidade(int $velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor(): string
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }
}