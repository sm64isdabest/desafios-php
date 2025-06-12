<?php

echo "<h1>Hello World</h1>";
echo "<hr>";

$nome = "Thiago";
$idade = 17;

function saudacao(string $nome)
{
    return 'Olá ' . $nome . '<br>';
}

echo saudacao($nome);

if ($nome === 'Thiago' and $idade === 17) {
    echo 'Seja bem vindo(a)' . $nome . '<br>';
}

// Debugando Variavéis
var_dump($nome, $idade);

?>