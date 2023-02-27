
<?php
if (!isset($_GET["montante"])) {
    $montante = 1;
} else {
    $montante = $_GET["montante"];
}

if (!isset($_GET["juros"])) {
    $juros = 1;
} else {
    $juros = $_GET["juros"];
}

if (!isset($_GET["parcelas"])) {
    $parcelas = 1;
} else {
    $parcelas = $_GET["parcelas"];
}

$parcela = $montante * (($juros / 100 * ((1 + $juros / 100) ** $parcelas)) / (((1 + $juros / 100) ** $parcelas) - 1));

// $j = $juros * $montante / 100;

// $amortizacao = $parcela - $j;

// $saldo = $montante - $amortizacao;

$saldo = $montante;
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
        <input type="number" step="0.01" name="montante" id="montante" autocomplete="off">
        <p>Informe o número desejado:</p>
        <input type="number" step="0.01" name="juros" id="juros" autocomplete="off">
        <p>Informe o número desejado:</p>
        <input type="number" step="0.01" name="parcelas" id="parcelas" autocomplete="off">
        <input type="submit" value="Calcular">
        <?php for ($i = 1; $i < $parcelas + 1; $i++) {
            $j = $juros * $saldo / 100;

            $amortizacao = $parcela - $j;
        
            $saldo = $saldo - $amortizacao;
            ?> <p>N° <?php echo $i; ?> ..... <?php echo number_format($parcela, 2); ?> ..... <?php echo number_format($amortizacao, 2); ?>  ..... <?php echo number_format($j, 2); ?> ..... <?php echo number_format($saldo, 2); ?></p>
            <?php
        }
        ?>
    </form>
</body>
</html>