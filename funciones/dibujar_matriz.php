<?php

    
// $matriz[0][0] = "0";
// $matriz[0][1] = "1";
// $matriz[0][2] = "2";
// $matriz[1][0] = "1";
// $matriz[1][1] = "1";
// $matriz[1][2] = "2";
// $matriz[2][0] = "2";
// $matriz[2][1] = "2";
// $matriz[2][2] = "4";


function draw_matrix($matriz){
    $fila= sizeof($matriz);
    $columna= sizeof($matriz[0]);
    
    echo "<table border=1>";
    
    for ($i=0; $i<$fila;$i++){
    echo "<tr>";
    for($n=0;$n<$columna;$n++){
        echo "<td>";
            print $matriz[$i][$n];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
}

// draw_matrix($matriz);
