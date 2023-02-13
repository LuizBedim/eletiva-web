
<?php

$raio = $_GET["raio"];
$pi = 3.141592;
$area = $pi * ($raio * $raio);
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
    <form method="GET" action="">
        <p>Informe o raio do círculo:</p>
        <input type="number" name="raio" id="raio" autocomplete="off">
        <input type="submit" value="Calcular">
        <p><?php echo $area; ?></p>
    </form>

</body>
</html>