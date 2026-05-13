<?php

class Calculadora{
    private $numA;
    private $numB;

    public function soma(){
        $somando = $this->numA + $this->numB;
        return $somando;
    }
    
    public function subtracao(){
        $subtraindo = $this->numA - $this->numB;
        return $subtraindo;
    }

    public function multiplicacao(){
        $multiplicando = $this->numA * $this->numB;
        return $multiplicando;
    }

    public function divisao(){
        $dividindo = $this->numA / $this->numB;
        return $dividindo;
    }

    public function resto(){
        $restou = $this->numA % $this->numB;
        return $restou;
    }

    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}

$calcu = new Calculadora();
$calcu->setNumA((int)readline("Informe o primeiro numero: "));
$calcu->setNumB((int)readline("Informe o segundo numero: "));

print("Os numeros lidos foram: " . $calcu->getNumA() . " e " . $calcu->getNumB() . "\n");
print("Soma: " . $calcu->soma() . "\n");
print("Subtração: " . $calcu->subtracao() . "\n");
print("Multiplicação: " . $calcu->multiplicacao() . "\n");
print("Divisão: " . $calcu->divisao() . "\n");
print("Resto: " . $calcu->resto() . "\n");