<?php
/**
 * Debug
 */

echo "<pre>Get: ";
print_r($_GET);
echo "</pre>";

echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

/**
 * Validar
 */
include_once 'validate.php';
include_once 'filterForm.php';
include_once 'forms/timelineForm.php';



if($_POST)
{
    $postfilter = filterForm($_POST, $timeline_form);
    $validate = validate($postfilter, $timeline_form);
    if($validate['valid'])
    {
        echo "hay que procesar";
        // PROCESAR.php    
           
    }
}
else
    echo "esto no es post";

// echo "<pre>Data: ";
// print_r($data);
// echo "</pre>";




