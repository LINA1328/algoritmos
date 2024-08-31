<?php

$estuadiantes = readline ('ingrese el numero de estudiantes');
$nota_Mayor = 0;
$nota_menor = 5;
$suma_notas = 0;
$Contador = 0;

for ($i=0; $i < $estuadiantes; $i++) { 
    $notas = readline ('ingrese la nota del estudiante'.($i+1));

    if ($notas > $nota_Mayor) {
            $nota_Mayor = $notas;
        }
    if ($notas < $nota_menor) {
            $nota_menor = $notas;
        }    
    
        $suma_notas = $suma_notas + $notas;
        $Contador = $Contador + 1;

}

if ($nota_Mayor >= 3.5) {
    echo 'Nota Mayor Aprobada'. '\n';
}else{
    echo 'Nota Mayor Reprobada '. '\n';
}
if ($nota_menor < 3.5) {
    echo 'Nota Menor Reprobada '. '\n';
}else {
    echo 'Nota Menor Aprobada'. '\n';
}

echo 'la nota mayor es : '. $nota_Mayor .'\n';
echo 'la nota menor es : '. $nota_menor .'\n';
echo 'el promedio de notas es : '. $suma_notas / $Contador . '\n';
?>