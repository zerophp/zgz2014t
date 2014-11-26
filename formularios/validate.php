<?php


function validate($post, $timelineForm)
{
    $valid = true;
    $errores = array();
    
    foreach ($timelineForm as $input) {
        $name = $input['name'];
        $value = isset($post[$name]) ? $post[$name] : null;
        
        if ($input['type'] == 'select-simple') {
            $input['validation'][] = 'select-simple';
        }
        if ($input['type'] == 'select-multiple') {
            $input['validation'][] = 'select-multiple';
        }
        
        foreach ($input['validation'] as $validation) {
            switch ($validation) {
                case 'required':
                    if (empty($value)) {
                        $valid = false;
                        $errores[$name] = $validation;
                    }
                    break;

                    // dd-mm-yyyy
                case 'date':
                    if (strlen($value) != 10 || false == checkdate(substr($value, 3, 2) , substr($value, 0, 2) , substr($value, 6, 4) )) {
                        $valid = false;
                        $errores[$name] = $validation;
                    }
                    break;

                case 'select-simple':
                    $valid = in_array($value, array_keys($input['values']));
                    if (!$valid) {
                        $errores[$name] = $validation;
                    }
                    break;

                case 'select-multiple':
                    if (is_array($value)) {
                        foreach ($value as $val) {
                            $valid = in_array($val, array_keys($input['values']));
                            if (!$valid) {
                                $errores[$name] = $validation;
                                break;
                            }
                        }
                        if (isset($input['options-validation']['max'])) {
                            $valid = count($value) <= $input['options-validation']['max'];
                            if (!$valid) {
                                $errores[$name] = 'options-validation-max';
                            }
                        }
                    }
                    break;
            }
        }
    }
    
    return array('valid' => $valid, 'errores' => $errores);
}