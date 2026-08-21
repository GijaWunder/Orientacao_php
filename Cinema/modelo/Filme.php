<?php

class Filme{
    private string $titulo;
    private string $diretor;
    private int $anoLancamento;
    private string $genero;

    public function __toString(){
        $dados = "Filme " . $this->titulo . ", do gênero " . $this->genero . ", feito pelo diretor(a) " . $this->diretor . ", foi lançado em " . $this->anoLancamento . ".\n";
        return $dados;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of diretor
     */
    public function getDiretor(): string
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor(string $diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of anoLancamento
     */
    public function getAnoLancamento(): int
    {
        return $this->anoLancamento;
    }

    /**
     * Set the value of anoLancamento
     */
    public function setAnoLancamento(int $anoLancamento): self
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero(): string
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }
}