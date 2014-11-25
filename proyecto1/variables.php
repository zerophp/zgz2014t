<?php

$a=1;
$name = "Agustin";

echo $name[0];  //A

echo NAME;

die("parar aqui");

echo "<hr/>";
var_dump($name);
echo "<hr/>";


$cliente = array('nombre'=>'Agustin',
                 'apellido'=>'Calderon',
                 'email'=>'agustincl@gmail.com',
                 'direccion'=> array('ciduad'=>'Zaragoza',
                                     'hotel'=>'villagoma'
                                        )    
            );

echo "<pre>";
print_r($cliente);
echo "</pre>";


echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<pre>";
print_r($_ENV);
echo "</pre>";




if ($name=="ANA")
{// si verdadero
    echo $name;
}
else
{
    // si falso
    echo "NO";    
}



if ($name=="ANA")
    // si verdadero
    echo $name;
else
    // si falso
    echo "NO";



if ($name=="ANA")
    echo $name; // si verdadero
else
    echo "NO"; // si falso











 