<?php 

/**
 * Dibuja un formulario desde una definicion en array
 * 
 * @param unknown $formDefinition
 * @return unknown
 */
function drawForm($formDefinition, $action, $method='post')
{
    $html='';
    $html.="<form action=\"".$action."\" method=\"".$method."\">";
    
    foreach ($formDefinition as $key => $value)
    {
        
        switch ($value['type'])
        {
            case 'text':
                $html.="<label>".$value['label']."</label>
                        <input type=\"".$value['type']."\" 
                             name=\"".$value['name']."\" 
                             value=\"".$value['defaultValue']."\">";
            break;
            case 'submit':
                $html.="<input type=\"".$value['type']."\" 
                               name=\"".$value['name']."\"  
                               value=\"".$value['defaultValue']."\" 
                         />";
            break;
            case 'textarea':
             break;
            case 'select-simple':
            break;
            case 'select-multiple':
            break;
        }
    }
        
    $html.='</form>';
    return $html;
}
