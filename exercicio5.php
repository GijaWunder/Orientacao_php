<?php

$soma = 0;

do{
    $valor = readline("Quanto voce pode dar de dinheiro pra confra? ");
    $soma += $valor;

}while($valor != 0);

print($soma . "\n");




