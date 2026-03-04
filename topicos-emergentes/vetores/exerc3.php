<?php

$produto = [
    "nome" => "Notebook",
    "preco" => 3500,
    "estoque" => 8
];

foreach ($produto as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

?>