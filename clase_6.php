<?php
#El algortmo debe solicitar las notas de N estudiantes y luego clasificarlas en tres categorias: "excelente" para notas iguales o superiores a 4.0 "sobresalientes" para notas entre 3.0 y 3.9 y "deficiente" para notas inferiores a 3.0 adema, el algoritmo debe indicar si la nota es un numero par o inpar

$n_estudiante = readline("ingrese el numero de estudiantes");

for($i =1; $i <=$n_estudiante; $i++){

    $nota = readline("ingrese la nota del estudiante . $i . :");

    if($nota >= 4){
        echo "Excelente";
    }
    elseif($nota >=3 && $nota <=3.9){
        echo "Sobresaliente";
    }
    elseif($nota <3){
        echo "Deficiente"."\n";
    }

    if ($nota % 2 == 0) {
        echo "Par"."\n";
    } else {
        echo "Impar"."\n";
    }
}


