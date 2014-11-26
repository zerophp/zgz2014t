<html>
<head>
    <title>Formulario</title>
    <style type="text/css">
        label {display: block;}
        input {display: block;}
    </style>
<body>
<?php
include_once 'forms/timelineForm.php';
include_once 'drawForm.php';

echo drawForm($timeline_form, 'action.php');
?>
</body>
</head>
</html>