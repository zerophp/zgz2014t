<?php

$usuario = array('name'=>'Agustin',
                 'apellido'=>'calderon',
                 'email'=>'agustincl@gmail.com',
                 'direccion'=>array('hotel'=>'villagoma',
                                    'ciudad'=>'Zaragoza'
                 ),
                 1 => 'algo',
                 '8'=>'cosa',
                 'esto otro',
                 FALSE => 'gato',
                 '1.2' =>'22',
                 1,5 =>'Zaragoza'
                 
);



foreach($usuario as $key => $value)
{
    echo $key.": ".$value;
}

echo "<pre>";
print_r($usuario);
echo "</pre>";