<?php

/**
 * Filter form data
 * 
 * @param array $formData
 * @param array $formDef
 * @return array
 */
function filterForm($formData, $formDef)
{
    foreach ($formDef as $formDefElement)
    {
        $elementName = $formDefElement['name'];
        $filters = $formDefElement['filters'];
        
        if(isset($formData[$elementName]))
        {
            if (is_array($formData[$elementName]))
            {
                for ($i = 0; $i < count($formData[$elementName]);$i++) {
                    foreach ($filters as $filter) {
                        $formData[$elementName][$i] = filter($formData[$elementName][$i], $filter);
                    }
                }
            } 
            else {
                foreach ($filters as $filter) {
                    $formData[$elementName] = filter($formData[$elementName], $filter);
                }
            }
        }
    }
    
    return $formData;
}

/**
 * Filter form element
 * 
 * @param string $value
 * @param string $filters
 * @return string
 */
function filter($value, $filters){
    
    switch ($filters) {
        case 'stripTrim':
            $value=trim($value);
            break;
        case 'stripTags':
            $value=strip_tags($value);
            break;
        case 'escape':
            $value=htmlentities($value);
            break;
    }  
    
    return $value;
}

