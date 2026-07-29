<?php

require_once("modelo/Estado.php");
require_once("modelo/Cidade.php");

$cidade = array();

//estados

$es1 = new Estado();
$es1->setNome("Santa Catarina");
$es1->setSigla("SC");

$es2 = new Estado();
$es2->setNome("Parana");
$es2->setSigla("PR");

//cidades

$ci1 = new Cidade();
$ci1->setNome("Florianopolis");
$ci1->setQtdHabitantes(587486);
$ci1->setAltitude(0);
$ci1->setEstado($es1);
array_push($cidade, $ci1);


$ci2 = new Cidade();
$ci2->setNome("Blumenau");
$ci2->setQtdHabitantes(789099);
$ci2->setAltitude(0);
$ci2->setEstado($es1);
array_push($cidade, $ci2);



$ci3 = new Cidade();
$ci3->setNome("Foz do Iguacu");
$ci3->setQtdHabitantes(200400);
$ci3->setAltitude(0);
$ci3->setEstado($es2);
array_push($cidade, $ci3);



$ci4 = new Cidade();
$ci4->setNome("Cascavel");
$ci4->setQtdHabitantes(347980);
$ci4->setAltitude(0);
$ci4->setEstado($es2);
array_push($cidade, $ci4);

foreach ($cidade as $c) {
    print "A cidade de " . $c->getNome() . ", localizada no estado " . $c->getEstado()->getNome() . "-" . $c->getEstado()->getSigla() . " possui " . $c->getQtdHabitantes() . " habitantes e uma altitudade de " . $c->getAltitude() . " metros. \n";
}