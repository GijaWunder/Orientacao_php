<?php

//classe

class Cidade{

    //atributos
    public $nome; 
    public $habitantes; 
    public $area; 
    public $altitude;
    public $estado;  
    
    //metodos
    function retornaDados(){
        $dados = $this->nome . " | ";
        $dados .= $this->habitantes . " | ";
        $dados .= $this->area . "km² | ";
        $dados .= $this->altitude . "m | ";
        $dados .= $this->estado . "\n";

        return $dados;

        //pode ser assim tbm: $dados = ("$this->nome . " | " . $this->habitantes . " | " . $this->area . " | " . $this->altitude . " | " . $this->estado . "\n")
    }

}


//programa principal
$cidade = new Cidade();
$cidade->nome = readline("Informe o nome da cidade: ");
$cidade->habitantes = readline("Informe a quantidade de habitamtes da cidade: ");
$cidade->area = readline("Informe a area da cidade: ");
$cidade->altitude = readline("Informe a altidude da cidade: ");
$cidade->estado = readline("Informe o estado que esta a cidade: ");

print ($cidade->retornaDados());