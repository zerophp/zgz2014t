<?php 

// $a = 4;
// $b = 4;

// $tabla = tablaMultiplicar($a, $b);


function tablaMultiplicar($a, $b) {
    $tabla = array();

    for ($i=0; $i <= $a; $i++) {
        $tabla[0][$i]= $i;
    }

    for ($i=1; $i <= $b; $i++) {
        $tabla[$i][0] = $i;

        for ($j=1; $j <= $a; $j++) {
            $tabla[$i][$j] = $i * $j;
        }
    }

    return $tabla;

}

