<?php

class Pessoa{
    private $nome;
    private $endereco;
    private $cidade;
    private $uf;
    private $altura;

    public function retornaApresentacao(){
        $dados = "Ola mundo, sou " . $this->nome;
        $dados .= " resido no endereco " . $this->endereco . "; " . $this->cidade . "; " . $this->uf;
        $dados .= " e possuo uma altura de " . $this->altura . ".\n";
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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$pessoa = new Pessoa();

$pessoa->setNome(readline("Informe seu nome: "));
$pessoa->setEndereco(readline("Informe seu endereço: "));
$pessoa->setCidade(readline("Informe a sua cidade: "));
$pessoa->setUf(readline("Informe seu UF: "));
$pessoa->setAltura(readline("Informe sua altura: "));

$pessoa2 = new Pessoa();

$pessoa2->setNome(readline("Informe seu nome: "));
$pessoa2->setEndereco(readline("Informe seu endereço: "));
$pessoa2->setCidade(readline("Informe a sua cidade: "));
$pessoa2->setUf(readline("Informe seu UF: "));
$pessoa2->setAltura(readline("Informe sua altura: "));

print($pessoa->retornaApresentacao());
print($pessoa2->retornaApresentacao());
