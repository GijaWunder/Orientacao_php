<?php

require_once("modelo/Gato.php");
require_once("modelo/Cachorro.php");

$gato1 = new Gato();
$gato1->setNome("Batman");
$gato1->setRaca("Angorá");

$gato2 = new Gato();
$gato2->setNome("Mistica");
$gato2->setRaca("Persa");

print $gato1->getDados() . $gato1->miar() . "\n";
print $gato2->getDados() . $gato2->miar() . "\n";

$cacho1 = new Cachorro();
$cacho1->setNome("Rocket");
$cacho1->setRaca("Fiapo de Manga");

$cacho2 = new Cachorro();
$cacho2->setNome("Groot");
$cacho2->setRaca("Galgo");

print $cacho1->getDados() . $cacho1->latir() . "\n";
print $cacho2->getDados() . $cacho2->latir() . "\n";