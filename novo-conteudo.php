<?php

// 1 - abstração | 2 - encapsulamento -> é para um acesso controlado. (estamos usando esse)| 

class Pessoa {
    private $nome;
    private $sobrenome;
    private $idade;

    public function retornaApresentacao(){
        $dados = "Ola , sou " . $this->nome;
        $dados .= " " . $this->sobrenome;
        $dados .= " e tenho " . $this->idade . "anos";
        return $dados;
    }

   

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$pessoa = new Pessoa();

$pessoa->setNome("Giovana");
$pessoa->setSobrenome("Wunder Souza");
$pessoa->setIdade(16);