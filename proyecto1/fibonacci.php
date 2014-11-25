
F=0,1,1,2,3,5,8,13,21,34,
<hr/>
<?php

$a=39;

echo "F=";
$f0=0;
$f1=1;
echo $f0;
echo ",";
echo $f1;
echo ",";

$f2=$f0+$f1;
while($f2<=$a)
{
    echo $f2;
    echo ",";
    $f0=$f1;
    $f1=$f2;
    $f2=$f0+$f1;    
}
    
