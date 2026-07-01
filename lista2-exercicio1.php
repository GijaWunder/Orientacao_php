<?php

class Posto{
    private $qtdLitros;
    private $litrosAbastacidos; 

    public function __construct(){
        $this->qtdLitros = 0;
        $this->litrosAbastacidos = array();
    }
    
    public function abastecer($quantidadeLitros){
        if ($quantidadeLitros <= $this->qtdLitros) {
            $this->qtdLitros -= $quantidadeLitros;
            array_push($this->litrosAbastacidos, $)
            return true;
        }
            return false;
    }

    public function reporEstoque(){
        $dados = $this->qtdLitros;
        return $dados;
    }

        /**
     * Get the value of qtdLitros
     */
    public function getQtdLitros()
    {
        return $this->qtdLitros;
    }

    /**
     * Set the value of qtdLitros
     */
    public function setQtdLitros($qtdLitros): self
    {
        $this->qtdLitros = $qtdLitros;

        return $this;
    }

    /**
     * Get the value of litrosAbastacidos
     */
    public function getLitrosAbastacidos()
    {
        return $this->litrosAbastacidos;
    }

    /**
     * Set the value of litrosAbastacidos
     */
    public function setLitrosAbastacidos($litrosAbastacidos): self
    {
        $this->litrosAbastacidos = $litrosAbastacidos;

        return $this;
    }

    
}

 $pos = new Posto;

do{
    print "\n\n*****MENU*****\n\n";
    print "1-Abastecer\n";
    print "2-Repor estoque\n";
    print "3-Listar abastecimento\n";
    print "0-Sair\n";

    $opcao = readline("Informe a opcao:");

    switch ($opcao) {
        case 1:
            print "\nAbastecimento\n";
            
            $litros = readline("Quantos litros voce quer abastecer?");
            if($pos->abastecer($litros) == true){
                print
            }


            //array_push($litrosAbastecidos, $pos);
            
            break;

        case 2:
            print "\nRepor estoque\n";

            $pos->setQtdLitros(readline("Quantos litros vai repor o estoque?"));

        break;

        case 3:
            print "\nListar abastecimento\n";

            foreach($litrosAbastacidos as $l){
                print $l;
            }

        break;
        
        case 0:
            print "Obrigada, tchau!\n";
        break;
        
        default:
            print "Opção inválida!\n";
            break;
    }






}while ($opcao != 0);