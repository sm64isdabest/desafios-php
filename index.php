<?php

require 'helpers.php';

echo validarEnderecoEmail('ana@example.com');
echo $resultado;
// echo validarEnderecoEmail('https://google.com');

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

// Duas formas de realizar arrays
$arr = array(1, 2, 3, 4, 5);
$arr2 = [1, 2, 3, 4, 5];

echo $arr[0] . "" . $arr2[1];

echo "<br>";

foreach ($arr2 as $number) {
    echo $number . "<br>";
}

$usuario = [
    "nome" => "Ivy",
    "idade" => "17",
    "email" => "ivy@example.com",
];

$usuario2 = [
    "nome" => "Beatriz",
    "idade" => "18",
    "email" => "beatriz@example.com",
];

$alunos = [
    "classificacao" => "Os melhores <3 do SESI/SENAI",
    "observacao" => "Falantes",
];

foreach ($alunos as $key => $value) {
    echo $key . " " . $value . ": " . "<br>";
}

/**
 * 
 * Função de saudação
 * @param string $nome Nome do usuário
 * @return string mensagem de saudação com o nome do usuário
 * @author Ana Luisa <ana.vidal@fieb.org.br>
 * 
 */

?>