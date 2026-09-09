<?php

require_once("modelo/CarroPasseio.php");
require_once("modelo/Caminhao.php");
require_once("modelo/Onibus.php");

$carro = new CarroPasseio();
$carro->setModelo("marea");
$carro->setCor("preto");
$carro->setVelocidade(220);
$carro->setQtdPassageiros(5);
print $carro->getDados();

//continuar