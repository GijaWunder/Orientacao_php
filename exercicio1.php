<?php

for ($i=1; $i <= 10 ; $i++) { 
    $resposta = readline ("Informe " . $i . " números: ");

    if($resposta < 0){
        print($resposta . " numero negativo\n");
    
    }
    
    else if($resposta > 0){
        print($resposta . " numero positivo\n");
    }else{
        print("Esse numero é 0\n");
    }

}