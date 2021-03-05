<?php

$nomeCidadeOrigem = $_GET["origem"];

$nomeCidadeDestino = $_GET["destino"];

$kmEntreCidades = $_GET["Km"];

$quantidadePedagio = $_GET["quantidadePedagio"];

$valorCadaPedagios = 9.40;

$valorTotalPedagios = 9.40 * $quantidadePedagio;

$valorTotalFrete = $kmEntreCidades * 6.00;

echo "<h1>Distância: $nomeCidadeOrigem para $nomeCidadeDestino são $kmEntreCidades Km.</h1>";
echo "<h1>Pedágio: serão R$ $valorTotalPedagios durante o trajeto, considerando o valor de R$ $valorCadaPedagios cada pedágio.</h1>";
echo "<h1>Valor Frete: R$ $valorTotalFrete, considerando R$6.00 por Km. </h1>";