<?php

require_once("modelo/Fabricante.php");
require_once("modelo/Carro.php");

$fabri = array();

$fa1 = new Fabricante();
$fa1->setNome("Volkswagem");
$fa1->setSigla("VW");
array_push($fabri, $fa1);

$fa2 = new Fabricante();
$fa2->setNome("Chevrolet");
$fa2->setSigla("GM");
array_push($fabri, $fa2);

$fa3 = new Fabricante();
$fa3->setNome("Fiat");
$fa3->setSigla("F");
array_push($fabri, $fa3);

$fa4 = new Fabricante();
$fa4->setNome("Renault");
$fa4->setSigla("RN");
array_push($fabri, $fa4);

$cole = array();

do{
    print "\n\n******Cadastro do Carro******\n\n";
    print "1-Cadastrar Carro\n";
    print "2-Excluir Carro\n";
    print "3-Listar Carro\n";
    print "0-Sair\n";

    $opcao = readline("Informe a opcao:");

    switch ($opcao) {
        case 1:
            print "\nCadastrando...\n";
            
            $ca = new Carro();
            $ca->setModelo(readline("Informe o modelo do carro: "));
            $ca->setAnoFabricacao(readline("Informe o ano de fabricacao do carro: "));

            $sigla = readline("Informe a sigla do fabricante (VW, GM, F ou RN): ");

            foreach ($fabri as $f) {
                if ($f->getSigla() == $sigla) {
                    $ca->setFabricante($f);
                }
            }
            
            array_push($cole, $ca);

            break;

        case 2:
            print "\nExcluindo...\n";

            //$at = readline("Informe o cadastro do atleta que deseja excluir (digite o indice do livro) ");

            //if ($at >= 0 && $at < count($atletas)) {
                //array_splice($atletas, $at, 1);
                //print"Exclusao concluiada!";

            //}else{
                //print("O cadastro informado nao existe!");
            //}

        break;

        case 3:
            print "\nListando...\n";

            foreach($cole as $c){
                print $c->getModelo() . " | " . $c->getAnoFabricacao() . " | " . $c->getFabricante()->getNome() . " | " . $c->getFabricante()->getSigla() . "\n";
            }

        break;
        
        case 0:
            print "Obrigada, tchau!\n";
        break;
        
        default:
            print "Opção inválida!\n";
            break;
    }

}while ($opcao != 0);

