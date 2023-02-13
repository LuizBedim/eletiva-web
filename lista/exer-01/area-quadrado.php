
<?php

if (!isset($_GET["comprimento"])) {
    $c = 0;
} else {
    $c = $_GET["comprimento"];
}

if (!isset($_GET["largura"])) {
    $l = 0;
} else {
    $l = $_GET["largura"];
}

$areaqr = $c * $l;
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
        <p>Informe o comprimento do quadrado/retangulo:</p>
        <input type="number" name="comprimento" id="comprimento" autocomplete="off"><br>
        <p>Informe a largura do quadrado/retangulo:</p>
        <input type="number" name="largura" id="largura" autocomplete="off"><br>
        <input type="submit" value="Calcular">
        <p><?php echo $areaqr; ?></p>
    </form>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>