<?php

//declarando a classe | é so declarativa, pra usar tem que criar os objetos
class Monitor{
    //atributos = caracteristica
    public $polegadas;
    public $resolucao;
    public $marca;
    public $cor;
    public $voltagem;

    //metodos = operaçoes | dentro da classe a funcao é metodo | fora é uma funcao normal
    function ligar(){
        print("Monitor ligado\n");
    }

    function desligar(){
        print("Monitor desligado\n");
    }

    //para usar o valor que foi passado no objeto usar $this
    function exibirImagem(){
        print("Monitor exibindo imagem em " . $this->polegadas . " polegadas\n");
    }

} //fim da classe


//programa principal

//criando o objeto Monitor 1
$monitor1 = new Monitor();
$monitor1->polegadas = 23;
$monitor1->resolucao = "1920x1080";
$monitor1->marca = "AOC";
$monitor1->cor = "preto";
$monitor1->voltagem = 220;
$monitor1->ligar();
$monitor1->desligar();
$monitor1->exibirImagem();
printf("Polegadas: %d | Marca: %s\n", $monitor1->polegadas, $monitor1->marca);

//criando o objeto Monitor 2
$monitor2 = new Monitor();
$monitor2->polegadas = 15;
$monitor2->resolucao = "1260x860";
$monitor2->marca = "ACER";
$monitor2->cor = "prata";
$monitor2->voltagem = 110;
$monitor2->ligar();
$monitor2->desligar();
$monitor2->exibirImagem();
print("Voltagem monitor 2: " . $monitor2->voltagem . "\n");
