
<?php

if (!isset($_GET["raio"])) {
    $raio = 0;
} else {
    $raio = $_GET["raio"];
}


$pi = 3.141592;
$areac = $pi * ($raio * $raio);
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
        <input type="number" name="raio" id="raio" autocomplete="off"><br>
        <p>Informe a base do triângulo:</p>
        <input type="number" name="raio" id="raio" autocomplete="off">
        <input type="submit" value="Calcular">
        <p><?php echo $areac; ?></p>
    </form>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>