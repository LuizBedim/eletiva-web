
<?php 

if (!isset($_GET["peso"])) {
    $peso = 0;
} else {
    $peso = $_GET["peso"];
}


if ($peso > 50) {
    $subtracao = $peso - 50;

$alteracao = $subtracao / 5;
    if ($alteracao > 0 && $alteracao <= 1) {
        $multa = "Pagará multa de 4 R$";
    } else if ($alteracao > 1 && $alteracao <= 2) {
        $multa = "Pagará multa de 8 R$";
    } else if ($alteracao > 2 && $alteracao <= 3) {
        $multa = "Pagará multa de 12 R$";
    } else if ($alteracao > 3 && $alteracao <= 4) {
        $multa = "Pagará multa de 16 R$";
    } else if ($alteracao > 4 && $alteracao <= 5) {
        $multa = "Pagará multa de 20 R$";
    } else if ($alteracao > 5 && $alteracao <= 6) {
        $multa = "Pagará multa de 24 R$";
    }
} else {
    $multa = "Não há multa, o peso não passou de 50kg";
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
        <p>Informe o peso do peixe: </p>
        <input type="number" name="peso" id="peso" autocomplete="off">
        <input type="submit" value="Calcular">
        <p><?php echo $multa; ?></p>
    </form>
</body>
</html>