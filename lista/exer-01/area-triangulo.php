
<?php

if (!isset($_GET["altura"])) {
    $h = 0;
} else {
    $h = $_GET["altura"];
}

if (!isset($_GET["base"])) {
    $b = 0;
} else {
    $b = $_GET["base"];
}

$areat = $b * $h / 2;
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
        <p>Informe a altura do triângulo:</p>
        <input type="number" name="altura" id="altura" autocomplete="off"><br>
        <p>Informe a base do triângulo:</p>
        <input type="number" name="base" id="base" autocomplete="off"><br>
        <input type="submit" value="Calcular">
        <p><?php echo $areat; ?></p>
    </form>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>