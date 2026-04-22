<?php

class Pessoa{

    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    function falarOla(){
        print("Olá mundo, me chamo " . $this->nome . "\n");
    }

    function falarEndereco(){
        print("Moro no " . $this->UF . " em " . $this->cidade . " na " . $this->endereco . "\n");
    }

    function falarAltura(){
        print("Tenho " . $this->altura . " de altura\n");
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = readline("Qual é o seu nome? \n");
$pessoa1->endereco = readline("Qual é o seu endereco? \n");
$pessoa1->cidade = readline("Qual é a sua cidade? \n");
$pessoa1->UF = readline("Qual é o seu UF? \n");
$pessoa1->altura = readline("Qual é a sua altura? \n");
$pessoa1->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();
