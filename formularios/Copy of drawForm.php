<?php
//$timelineForm =array(1, 2, 3, 17);
$timelineForm= array(
         array('type'=>'text',
         'name'=>'startDate',
         'options'=>'',
         'defaultValue'=>'',
         'label'=>'Start Date',
         'validation'=> array(
                        'require',
                        'date'),
         'filters'=>array('stripTrim',
                         'stripTags',
                         'scape')
             
        ),
         array('type'=>'text',
         'name'=>'end_date',
         'options'=>'',
         'defaultValue'=>'',
         'label'=>'End Date',
         'validation'=> array(
                        'require',
                        'date'),
         'filters'=>array('stripTrim',
                         'stripTags',
                         'scape')
             
        ),
         array('type'=>'select',
         'name'=>'end_date',
         'options'=>array('1'=>''),
         'defaultValue'=>'',
         'label'=>'End Date',
         'validation'=> array(
                        'require',
                        'date'),
         'filters'=>array('stripTrim',
                         'stripTags',
                         'scape')
             
        )
        );

function drawForm($dataForm)
{
    $i = 0;
    
    foreach ($dataForm as $formulario)
    {
        $cad="";
        foreach ($formulario as $key =>$campo)
        {
            if ($key=="type")            
            {
                switch ($campo){
                    case 'text': 
                        $cad = '<input ';
                        break;
                    case 'textarea': 
                        $cad.='<textarea ';
                        break;
                    case 'select': 
                        $cad.='<select ';
                        break;
                    case 'select multiple': 
                        $cad.='<select multiple';
                        break;
                }                    
            }
            if ($key=="name")  
            {
                $cad.='name='.$campo;                 
            }
            if ($key=="defaultValue")  
            {
                $cad.='value='.$campo.'>';                
            }
            if ($key=="label")  
            {
                $cad = '<label>'.$campo.'</label>'.$cad;                
            }
            
        }
        echo $cad;
    }
}




drawForm($timelineForm);
