<?php

$alunos = [
    "Helber" => [
        "nota" => 8,
    ],
    "Pedro Emanoel" => [
        "nota" => 9,
    ],
    "Manuele" => [
        "nota" => 8,
    ],
];
$media = 0;
echo "<hr>";

foreach ($alunos as $alunoNome => $alunoNota) {
    echo "Nome: " . $alunoNome . "<br>";
    echo "Nota: " . $alunoNota['nota'] . "<br>";

    $media += $alunoNota['nota'] / 3;
}

echo "Média da turma: " . number_format($media, 2, '.', '.');

?>

