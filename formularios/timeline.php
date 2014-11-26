<?php

if(!isset($_GET['action']))
    $action = 'select';
else
    $action =$_GET['action'];

switch ($action)
{
    case 'insert':
        include_once 'forms/timelineForm.php';
        include_once 'drawForm.php';
        
        echo drawForm($timeline_form, 'action.php');
        echo "esto es insert";
    break;
    case 'update':
        echo "esto es update";
        break;
    case 'select':
        
        echo "esto es select";
    break;
    case 'delete':
        echo "esto es delete";
        break;
}