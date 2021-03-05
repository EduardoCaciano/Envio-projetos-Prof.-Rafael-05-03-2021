<?php
    const ACIMA = 0.42;
    const ABAIXO = 0.32;

    $nomeCliente = $_GET["nome"];
    $consumo = $_GET["consumo"];
    $endereco = $_GET["endereco"];
    $valorAlto = ACIMA * $consumo; 
    $valorBaixo = ABAIXO * $consumo;
?>

<!-- ****************************************************************************************************** -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>
<body>
    <h1>Conta de Luz de <?= $nomeCliente ?>.</h1>
            <h1><?= $endereco ?></h1>
            <?php
                if($consumo > 120){
            ?>
                <h1 style="color: red;">Consumo: <?= $consumo ?> Quilowatts-hora</h1>
            <?php
                }else{
            ?>
                <h1 style="color: blue;">Consumo: <?= $consumo ?> Quilowatts-hora, "Obrigado por economizar!".</h1>
            <?php
                }
            ?>

            
            <?php
                if($consumo > 120){
            ?>
                <h1>Valor a pagar: R$ <em><em><?=number_format($valorAlto, 2, ",", ".") ?></em></h1>
            <?php
            }else{
            ?>
                <h1>Valor a pagar: R$ <em><em><?=number_format($valorBaixo, 2, ",", ".") ?></em></h1>
            <?php
                }
            ?>
</body>
</html>