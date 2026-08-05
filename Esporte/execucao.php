<?php

require_once("modelo/Atleta.php");
require_once("modelo/Pais.php");

$atletas = array();


do{
    print "\n\n******Cadastro do Atleta******\n\n";
    print "1-Cadastrar Atleta\n";
    print "2-Excluir Atleta\n";
    print "3-Listar Atleta\n";
    print "0-Sair\n";

    $opcao = readline("Informe a opcao:");

    switch ($opcao) {
        case 1:
            print "\nCadastrando...\n";
            
            $pa = new Pais();
            $pa->setNome(readline("\nInforme o nome do Pais: "));
            $pa->setContinente(readline("Informe o continente do Pais: "));

            $atle = new Atleta();
            $atle->setNome(readline("Informe o nome do atleta: "));
            $atle->setIdade(readline("Informe a idade do atleta: "));
            $atle->setEsporte(readline("Informe o esporte praticado pelo atleta: "));
            $atle->setPais($pa);

            array_push($atletas, $atle);

            break;

        case 2:
            print "\nExcluindo...\n";

            $at = readline("Informe o cadastro do atleta que deseja excluir (digite o indice do livro) ");

            if ($at >= 0 && $at < count($atletas)) {
                array_splice($atletas, $at, 1);
                print"Exclusao concluiada!";

            }else{
                print("O cadastro informado nao existe!");
            }

        break;

        case 3:
            print "\nListando...\n";

            foreach($atletas as $a){
                print $a->getNome() . " é atleta do " . $a->getPais()->getNome() . ", continente " . $a->getPais()->getContinente() . ", possui " . $a->getIdade() . " anos e atua no esporte " . $a->getEsporte() . ".\n";
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