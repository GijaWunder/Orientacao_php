<?php

require_once("modelo/IFormaGeomatrica.php");
require_once("modelo/Quadrado.php");
require_once("modelo/Retangulo.php");
require_once("modelo/Circulo.php");

do{
    print "\n******Formas Geometricas******\n\n";
    print "1-Circulo\n";
    print "2-Quadrado\n";
    print "3-Retangulo\n";
    print "0-Sair\n";

    $opcao = readline("\nInforme a opção:");

    switch ($opcao) {
        case 1:
            print "\nCirculo\n\n"; 

            for ($i=0; $i < 3; $i++) { 
                $ci = new Circulo();
                $ci->setRaio(readline("Informe o raio do circulo: "));
            }
            
                
        break;           



        case 2:
            print "\nQua\n\n"; 

            for ($i=0; $i < 3; $i++) { 
                $ci = new Circulo();
                $ci->setRaio(readline("Informe o raio do circulo: "));
            }


        break;

        case 3:
            print "\nCirculo\n\n"; 

            for ($i=0; $i < 3; $i++) { 
                $ci = new Circulo();
                $ci->setRaio(readline("Informe o raio do circulo: "));
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
