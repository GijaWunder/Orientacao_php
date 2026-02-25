<?php

$num = (int) readline("Informe um numero: ");

if ($num > 0) {
    $dobro = $num * 2;
    print("O numero " . $num . " é positivo. E seu dobro é " . $dobro . "\n");
}

else if($num < 0){
    $triplo = $num * 3;
    print("O numero " . $num . " é negativo. E seu triplo é " . $triplo . "\n");
}else{
    print ("Numero 0\n");
}