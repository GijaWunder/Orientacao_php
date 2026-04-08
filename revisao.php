<?php

$paises = array();

for ($i=0; $i < 2; $i++) { 
    $p = array("nome" => readline("informe o pais: \n"), "continente" => readline("informe o continente desse pais: \n"), "qtdHabitantes" => readline("informe a quantidade de habitantes desse pais: \n"));
    array_push($paises, $p);
}

foreach($paises as $pa){
    print($pa["nome"] . " - " . $pa["continente"] . " - " . $pa["qtdHabitantes"]);
}

print("a soma dos habitantes desses paises é " . quantHab($pa));

function quantHab($pa){
    $totalHab = 0;
    $totalHab = $pa ["qtdHabitantes"] + $pa ["qtdHabitantes"];

    return $totalHab;
}
