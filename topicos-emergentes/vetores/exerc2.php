<?php

$numeros = [10, 20, 30, 40, 50];

unset($numeros[2]);

foreach ($numeros as $n) {
    echo $n . "<br>";
}

?>