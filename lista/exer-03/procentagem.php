
<?php

if (!isset($_GET["valor"])) {
    $valor = 0;
} else {
    $valor = $_GET["valor"];
}

if (!isset($_GET["por"])) {
    $por = 0;
} else {
    $por = $_GET["por"] / 100;
}

// $porcent = $por / 100;

// $result = $valor + ($valor * $porcent);

$result = $valor + ($valor * $por);

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
        <p>Informe o número desejado:</p>
        <input type="number" name="valor" id="valor" autocomplete="off">
        <p>Informe o número desejado:</p>
        <input type="number" name="por" id="por" autocomplete="off">
        <input type="submit" value="Calcular">
        <p><?php echo $result; ?></p>
    </form>
</body>
</html>