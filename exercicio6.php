<?php

$num1 = readline ("Informe um numero: ");
$num2 = readline ("Informe um numero: ");
$num3 = readline ("Informe um numero: ");


if ($num1 < $num2 && $num1 < $num3) {
    print("O menor numero é " . $num1 . "\n");
}

if ($num2 < $num1 && $num2 < $num3) {
    print("O menor numero é " . $num2 . "\n");
}

if ($num3 < $num1 && $num3 < $num2) {
    print("O menor numero é " . $num3 . "\n");
}else{
    print("Nao ha numeros menores.\n");
}