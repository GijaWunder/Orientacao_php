<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");


print "1- Residencial\n";
print "2- Comercial\n";
print "3- Industrial\n";

$opcao = readline("Informe o local de consumo de KWh: ");

$consu = null;
if($opcao == 1) {
    $consu = new Residencial();
    $consu->setConsumo(readline("Informe o consumo de KWh: "));

} else if($opcao == 2) {
    $consu = new Comercial();
    $consu->setConsumo(readline("Informe o consumo de KWh: "));

} else if($opcao == 3) {
    $consu = new Industrial();
    $consu->setConsumo(readline("Informe o consumo de KWh: "));
} 

print "Valor total do consumo: " . $consu->getValorFatura() . "\n";
