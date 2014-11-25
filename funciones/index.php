<?php
$x=190;
$y=57;

include_once('suma.php');
include_once('dibujar_matriz.php');
include_once('fibonacci.php');
include_once('print_array.php');
include_once('tabla_multiplicar.php');

$max=suma($x,$y);
$array = fibonacci($max);
printArray($array);
$matriz = tablaMultiplicar($x,$y);
draw_matrix($matriz);