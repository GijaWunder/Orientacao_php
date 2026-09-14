<?php

require_once("modelo/PessoaFisica.php");
require_once("modelo/PessoaJuridica.php");

$pessoas = array();

do{
    print "\n******Pessoa******\n\n";
    print "1-Cadastrar pessoa fisica\n";
    print "2-Cadastrar pessoa juridica\n";
    print "3-Listar\n";
    print "4-Excluir\n";
    print "0-Sair\n";

    $opcao = readline("\nInforme a opção:");

    switch ($opcao) {
        case 1:
            print "\nCadastrando pessoa fisica\n\n"; 

            $pessoaF = new PessoaFisica();
            $pessoaF->setNome(readline("Informe o nome da pessoa fisica: "));
            $pessoaF->setIdade(readline("Informe a idade da pessoa fisica: "));
            $pessoaF->setCpf(readline("Informe o CPF da pessoa fisica: "));
            array_push($pessoas, $pessoaF);
                
        break;           



        case 2:
            print "\nCadastrando pessoa juridica\n\n"; 

            $pessoaJ = new PessoaJuridica();
            $pessoaJ->setNome(readline("Informe o nome da pessoa fisica: "));
            $pessoaJ->setNomeFantasia(readline("Informe o nome fantasia da pessoa juridica: "));
            $pessoaJ->setCnpj(readline("Informe o CNPJ da pessoa juridica: "));
            array_push($pessoas, $pessoaJ);


        break;

        case 3:
            print "\nListando pessoa\n\n"; 

            foreach ($pessoas as $p) {
                if ($p instanceof PessoaFisica){
                    print "Nome: " . $p->getNome() . " | Idade: " . $p->getIdade() . " | CPF: " . $p->getCpf() . "\n";

                }else if($p instanceof PessoaJuridica){
                    print "Nome: " . $p->getNome() . " | Nome fantasia: " . $p->getNomeFantasia() . " | CNPJ: " . $p->getCnpj() . "\n";

                }
            }


        break;

        case 4:
            print "\nExcluindo\n\n";

            $pe = readline("Informe o indice da pessoa: ");

            if ($pe >= 0 && $pe < count($pessoas)) {
                array_splice($pessoas, $pe, 1);
                print"Exclusao concluiada!";

            }else{
                print("O indice informado nao existe!");
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
