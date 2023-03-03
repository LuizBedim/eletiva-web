
<?php
session_start();
$soma = 0;

if (!isset($_GET["num"])) {
    $num = 1;
} else {
    $num = $_GET["num"];
}

for ($i = 0; $i < strlen($num); $i++){
    $soma += $num[$i];
}

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
        <input type="number" name="num" id="num" autocomplete="off">
        <input type="submit" value="Somar">
        <p><?php echo $soma; ?></p>
    </form>
</body>
</html>