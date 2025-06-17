<?php

$produtos = [
    "Boné" => [
        "preço" => 59.90,
    ],
    "Bolsa de palha" => [
        "preço" => 79.49,
    ],
    "Laço" => [
        "preço" => 13.19,
    ],
];

foreach ($produtos as $nome => $preço) {
    echo "Produto: " . $nome . ", " . "Preço: R$" . $preço['preço'] . "<br>";
}

?>