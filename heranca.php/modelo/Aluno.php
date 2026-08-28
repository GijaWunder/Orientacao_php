<?php

require_once("Pessoa.php");

class Aluno extends Pessoa{
    private string $matricula;

    public function __toString(){
        $dados = "Nome:" . $this->getNome() . " | RG: " . $this->getRg() . " | Idade: " . $this->getIdade() . " | Matricula: " . $this->matricula;
        return $dados;
    }

    /**
     * Get the value of matricula
     */
    public function getMatricula(): string
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula(string $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}