<?php
$pontuacao = 100;

function vitoria(int $pontuacao)
{
    return $pontuacao + 20;
}

function derrota(int $pontuacao)
{
    return $pontuacao - 15;
}

echo "A pontuação ficou: " . vitoria($pontuacao);
?>