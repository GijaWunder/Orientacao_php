<?php


for ($i=0; $i < 5 ; $i++) { 
    $nome = readline("Informe um nome: \n");
    $peso = (float) readline("Informe um peso: \n");
    $altura = (float) readline("Informe uma altura: \n");
    $IMC = $peso / ($altura * $altura);

    print($nome . " tem " . $peso . " kilos; " . $altura . " de altura. Seu IMC é " . $IMC. "\n");

}