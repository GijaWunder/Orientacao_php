<?php

require_once("modelo/Funcionario.php");
require_once("modelo/Departamento.php");

$funcio = array();

for ($i=0; $i < 5; $i++) { 

    $de = new Departamento();
    $de->setNome(readline("\nInforme o nome do departamento: "));
    $de->setNumeroSala(readline("Informe o numero da sala do departamento: "));

    $fun = new Funcionario();
    $fun->setNome(readline("Informe o nome do funcionario: "));
    $fun->setCargo(readline("Informe o cargo do funcionario: "));
    $fun->setSalario(readline("Informe o salario do funcionario: "));
    $fun->setDep($de);

    array_push($funcio, $fun);
}

foreach ($funcio as $f){
    print "Nome do funcionario: " . $f->getNome() . " | cargo: " . $f->getCargo() . " | salario: " . $f->getSalario() . ".\nDepartamento: " . $f->getDep()->getNome() . " - " . $f->getDep()->getNumeroSala() . "\n";
}