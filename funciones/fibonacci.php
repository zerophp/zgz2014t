<?php

/**
 * Devuelve un array con los resultados de una secuencia
* de Fibonacci hasta un número $max especificado
* @param int $max
* @return array
*/

function fibonacci($max) {
    $f0 = 0;
    $f1 = 1;
    $suma = 0;
    $respuesta = array(0,1);
    $i = 2;

    while($f0 + $f1 < $max) {
        $suma = $f0 + $f1;
        $f0 = $f1;
        $f1 = $suma;
        $respuesta[$i] = $suma;
        $i++;
    }
    return $respuesta;
}
