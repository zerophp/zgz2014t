<?php

function printArray ($ar) {

    echo '<table border="1">';
    echo '<tr>';

    for ($i = 0 ; $i < count($ar) ; $i++) {
        echo '<td>' . $ar[$i] . '</td>';
    }

    echo '</tr>';
    echo '</table>';
}
