<?php

$e = readline("Digite edad : ");
$li = readline("¿Tiene licencia? : ");
$nom = readline("Digite nombre : ");

if($e > 18 && $e < 70 && $li == "si" ){
    echo "puede manejar, te ganaste una licencia!!!!" . "\n";
   
}else{
    echo "no puede manejar";
}
?>