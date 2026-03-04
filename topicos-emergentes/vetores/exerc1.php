<?php

$vetor = ["Maçã", "Banana", "Laranja", "Uva", "Pera"];

foreach ($vetor as $fruta) {
    echo $fruta . "<br>";
}

$vetor[] = "NovaFruta";

echo "<br>Depois de adicionar:<br>";

foreach ($vetor as $fruta) {
    echo $fruta . "<br>";
}

?>