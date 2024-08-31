<?php

#relizar un algrotimo que digitados 3 numeros me halle el numero mayor y el numero menor Nota: no usar ciclos, colo con if

$numero1 = readline('ingrese el numero 1 ');
$numero2 = readline('ingrese el numero 2 ');
$numero3 = readline('ingrese el numero 3 ');
$numero_mayor = 0;
$numero_menor = 0;

if ( $numero1 < $numero2 && $numero1 < $numero3 ){
    $numero_menor = $numero1;

}elseif ($numero2 < $numero1 && $numero2 < $numero3) {
    $numero_menor = $numero2;
}elseif ($numero3 < $numero1 && $numero3 < $numero2) {
    $numero_menor = $numero3;
}

echo "numero menor es : " . $numero_menor . '  ';

if ( $numero2 > $numero1 && $numero2 > $numero3 ){
    $numero_mayor = $numero2;
} elseif ($numero1 > $numero2 && $numero1 > $numero3 ){
    $numero_mayor = $numero1;
} elseif ($numero3 > $numero2 && $numero3 > $numero1 ){
    $numero_mayor = $numero3;
}
echo "numero mayor es : " . $numero_mayor;  
echo "numero mayor es : " . $numero_mayor; 
?>