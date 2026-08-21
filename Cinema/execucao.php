<?php

require_once("modelo/Filme.php");


$filmes = array();

for ($i=0; $i < 2; $i++) { 
    $fi = new Filme();
    $fi->setTitulo(readline("Inforne o título do filme: "));
    $fi->setGenero(readline("Inforne o gênero do filme: "));
    $fi->setDiretor(readline("Inforne o diretor do filme: "));
    $fi->setAnoLancamento(readline("Inforne o ano de lançamento do filme: "));

    array_push($filmes, $fi);
}

do{
    print "\n******Cinema******\n\n";
    print "1-Buscar filme pelo título\n";
    print "2-Buscar filme pelo gênero\n";
    print "0-Sair\n";

    $opcao = readline("\nInforme a opção:");

    switch ($opcao) {
        case 1:
            print "\nBuscando filme pelo título...\n"; 

            $titulo = readline("Informe o título do filme: ");

            $fil = null;
         
            foreach ($filmes as $f) {
                if($titulo == $f->getTitulo()){
                    $fil != null;
                    print $f;

                    break;
                }
                
            }

            foreach ($filmes as $ff) {
                if($titulo != $ff->getTitulo() && $fil = null){
                    print "Filme não encontrado.";
                    break;
                }
            }
                
        break;           



        case 2:
            print "\nBuscando filme pelo gênero...\n"; 

            $genero = readline("Informe o gênero do filme: ");

            $fil = null;
         
            foreach ($filmes as $f) {
                if($genero == $f->getTitulo()){
                    $fil != null;
                    print $f;

                    break;
                }
                
            }

            foreach ($filmes as $ff) {
                if($genero != $ff->getTitulo() && $fil = null){
                    print "Filme não encontrado.";
                    break;
                }
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