<?php

class Cidade{
    private $populacao;
    private $area;
    private $nome;

    public function aumentaPopulacao($qtd, $hab){
        if ($qtd > $hab) {
            $aumento = $hab * $hab + $qtd;
            print "Se passaram 5 anos desde a criacao da sua cidade e a populaçao aumentou para: " . $aumento . "\n";
            //return $dado;
        }
    }

    public function calHab(){
        $cal = $this->populacao / $this->area;
        return $cal;
    }

    public function __toString(){
        $dados = "O nome da cidade é " . $this->getNome() . " | " ;
        $dados .= "Habitantes: " . $this->getPopulacao() . " | ";
        $dados .= "Area: " . $this->getArea() . " km². \n";
        return $dados;
    }
    

    /**
     * Get the value of populacao
     */
    public function getPopulacao()
    {
        return $this->populacao;
    }

    /**
     * Set the value of populacao
     */
    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    /**
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
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
}

$quant = readline("Quantas cidades fciticias você quer criar? ");

$cidade = new Cidade();

for ($i=0; $i < $quant; $i++) { 
    $cidade->setNome(readline("Informe um nome para sua cidade ficticia: "));
    $cidade->setArea(readline("Informe a area para sua cidade ficticia: "));
    $cidade->setPopulacao(readline("Informe a quantidade de habitantes da sua cidade ficticia: "));
    $cidade->__toString();
    $cidade->aumentaPopulacao($cidade->getArea(), $cidade->calHab());
}




