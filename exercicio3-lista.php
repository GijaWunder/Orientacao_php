<?php

class Pokemon{

    public $nome;
    //public $tipo;
    public $experiencia;
    public $pontosVida;
    //public $ataque;
   // public $defesa;
    //public $velocidade;
    //public $forca;

    function batalhar(){

    $batalhas = readline("Quantas vezes você gostaria de batalha? ");

        for ($i=0; $i < $batalhas; $i++) { 
            $luta = $this->pontosVida - random_int(1, 20);
        }

        if ($luta < 0) {
            print("O seu pokémon perdeu! Que pena!");

        }else{
            print("O seu pokémon venceu! Que alegria!");
            return $luta;
        }
       
    }

    function aumentarNivel(){
        $nivel = 1;
        print("O nível do seu pokémon é " . $nivel . "\n");

        if (aumentarExperiencia() > aumentarExperiencia() * 2) {
            $nivel++;
            print("O nível do seu pokémon aumento! Agora ele está no nível " . $nivel . "\n");
            return $nivel;
        }else{
            print("Continue batalhando para aumentar o nível do seu pokémon!\n");
        }
    }

    function aumentarVida(){
        $vida = $this->pontosVida;
        if (aumentarNivel() > aumentarNivel() * 2) {
            $vida += 10;
        }else{
            print("Continue batalhando para aumentar os pontos de vida do seu pokémon!\n");

        }
    }

    function aumentarExperiencia(){
        if (batalhar() > batalhar() + 10) {
            $aumento = $this->experiencia + 10;

            if ($aumento > 40) {
                return $aumento;
            }
        }else{
            print("Continue batalhando para aumentar a sua experiencia!\n");
            $continuar = readline("Gostaria de continuar a batalhar? s -> sim | n -> não \n");
            if($continuar == "s") {
                batalhar();
            }else{
                print("Que pena! Até a prómixa batalha.");
            }

        }
    }
}

$pokemon = new Pokemon();

$pokemon->nome = readline("Informe o nome do seu pokémon: ");
//$pokemon->tipo = readline("Informe o tipo do seu pokémon: ");
$pokemon->experiencia = readline("Informe o experiencia do seu pokémon: ");
$pokemon->pontosVida = readline("Informe os pontos de vida do seu pokémon: ");
//$pokemon->ataque = readline("Informe o ataque do seu pokémon: ");
//$pokemon->defesa = readline("Informe a defesa do seu pokémon: ");
//$pokemon->velocidade = readline("Informe a velocidade do seu pokémon: ");

