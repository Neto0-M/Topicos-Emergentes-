<?php

$alunos = [
    ["nome" => "Ana", "nota" => 8],
    ["nome" => "Bruno", "nota" => 6],
    ["nome" => "Carlos", "nota" => 9]
];

$soma = 0;
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $a) {
    $soma += $a["nota"];

    if ($a["nota"] > $maiorNota) {
        $maiorNota = $a["nota"];
        $melhorAluno = $a["nome"];
    }
}

$media = $soma / count($alunos);

echo "Média: $media <br>";
echo "Maior nota: $maiorNota - Aluno: $melhorAluno";

?>