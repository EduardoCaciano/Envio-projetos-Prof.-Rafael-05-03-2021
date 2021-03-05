<?php
    const DOLAR = 5.41;
    const EURO = 6.57;

    $valorReal = $_GET["reais"];
    $moedas = $_GET["moedas"];

    $dolar = $valorReal * DOLAR;
    $euro = $valorReal * EURO;

    if ($moedas == "Dolar"){
        echo "<h1>Valor total em $moedas: $ $dolar</h1>";
    }elseif ($moedas == "Euro"){
        echo "<h1>Valor total em $moedas: € $euro</h1>";
    }
?>