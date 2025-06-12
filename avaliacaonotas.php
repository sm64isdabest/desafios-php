<?php
$nota1 = 5;
$nota2 = 8;
$nota3 = 9;

$somadasnotas = $nota1 + $nota2 + $nota3;
$media = $somadasnotas / 3;

if ($media >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}

?>