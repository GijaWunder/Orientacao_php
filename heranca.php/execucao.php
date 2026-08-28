<?php

require_once("modelo/Aluno.php");

$aluno = new Aluno();
$aluno->setNome("Isabela");
$aluno->setRg("53676373238");
$aluno->setIdade(16);
$aluno->setMatricula("3547254");

print $aluno . "\n";

$professor = new Professor("Daniel", "8362627667", "28");
$professor->setSalario(1000);
