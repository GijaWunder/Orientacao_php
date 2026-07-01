<?php

class Prato{
    private $descricao;
    private $quantidade;
    private $valorUnitario;

    public function getValorTotal(){
        return $this->quantidade * $this->valorUnitario;
    }

    public function __toString(){
        $dados = $this->descricao . " | " . $this->quantidade . " | " . $this->valorUnitario . " | ";
        $dados .= "Total do prato: " . $this->getValorTotal() . "\n";

        return $dados;
    }


    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     */
    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$pratos = array();

for ($i=1; $i <= 3; $i++) { 
    $pra = new Prato;
    $pra->setDescricao(readline("Informe a descricao do prato:"));
    $pra->setQuantidade(readline("Informe a quantidade do prato:"));
    $pra->setValorUnitario(readline("Informe o valor univario do prato:\n"));

    array_push($pratos, $pra);
}

$totalJanta = 0;

foreach($pratos as $p){
    print $p;

    $totalJanta += $p->getValorTotal();
}

print("Valor total da Janta: " . $totalJanta . "\n");