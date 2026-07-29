<?php

require_once("modelo/Pais.php");
require_once("modelo/Jogador.php");

$pais = new Pais();
$pais->setNome("Brasil");
$pais->setContinente("Amaerica do Sul");
$pais->setTitulos(5);
//print_r($pais);

$jogador = new Jogador();
$jogador->setNome("Neymar");
$jogador->setNumero(10);
$jogador->setPosicao("atacante");
$jogador->setPais($pais);
//print_r($jogador);

print "nome do jogador: " . $jogador->getNome() . "\n";
print "numero do jogador: " . $jogador->getNumero() . "\n";
print "posicao do jogador: " . $jogador->getPosicao() . "\n";
print "pais do jogador: " . $jogador->getPais() . "\n"; //outro jeito de fazer
print "continente do jogador: " . $jogador->getPais()->getContinente() . "\n";