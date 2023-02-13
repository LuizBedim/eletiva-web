
<?php
$pi = 3.141592;

$raio = $_POST['raio'];
$area;

$area = 4 * $pi * ($raio * $raio);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Informe o raio do círculo:</p><br>
    <input type="number" value="raio" name="raio" id="raio">
</body>
</html>