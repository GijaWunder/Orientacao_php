<?php

class Carro{
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;


    public function __toString(){
        $dados = $this->getModelo() . " - " . $this->getMarca() . ", ";
        $dados .= "fabricado em " . $this->getAnoFabricacao() . ", ";
        $dados .= "com velocidade maxima de " . $this->getVelocidadeMax() . "km/h.\n\n";
        return $dados;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of anoFabricacao
     */
    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    /**
     * Set the value of anoFabricacao
     */
    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get the value of velocidadeMax
     */
    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    /**
     * Set the value of velocidadeMax
     */
    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}

$carro1 = new Carro();
$carro1->setModelo(readline("informe o modelo do carro: "));
$carro1->setMarca(readline("informe a marca do carro: "));
$carro1->setAnoFabricacao(readline("informe o ano de fabricaçao do carro: "));
$carro1->setVelocidadeMax(readline("informe a velocidade do carro: "));

$carro2 = new Carro();
$carro2->setModelo(readline("informe o modelo do carro: "));
$carro2->setMarca(readline("informe a marca do carro: "));
$carro2->setAnoFabricacao(readline("informe o ano de fabricaçao do carro: "));
$carro2->setVelocidadeMax(readline("informe a velocidade do carro: "));

$carro3 = new Carro();
$carro3->setModelo(readline("informe o modelo do carro: "));
$carro3->setMarca(readline("informe a marca do carro: "));
$carro3->setAnoFabricacao(readline("informe o ano de fabricaçao do carro: "));
$carro3->setVelocidadeMax(readline("informe a velocidade do carro: "));

$carroMaisRapido = $carro1;

if ($carro2->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()) {
    $carroMaisRapido = $carro2;
}

if ($carro3->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()) {
    $carroMaisRapido = $carro3;
}


$carroMenosRapido = $carro1;

if ($carro2->getVelocidadeMax() < $carroMenosRapido->getVelocidadeMax()) {
    $carroMenosRapido = $carro2;
}

if ($carro3->getVelocidadeMax() < $carroMenosRapido->getVelocidadeMax()) {
    $carroMenosRapido = $carro3;
}

print("O carro mais rapido é: " . $carroMaisRapido);

print("O carro mais lento é: " . $carroMenosRapido);

