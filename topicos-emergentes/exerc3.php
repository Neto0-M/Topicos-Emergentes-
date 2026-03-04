<?php
if ($_POST) {

    $mf = $_POST["media"];

    echo "Média final: $mf <br><br>";

    if ($mf <= 1.7) {
        echo "Aluno NÃO pode realizar o exame.";
    }
    elseif ($mf >= 7.0) {
        echo "Aluno APROVADO.";
    }
    else {
        $ne = (50 - (6 * $mf)) / 4;
        echo "Precisa tirar no exame: $ne";
    }

} else {
?>

<form method="post">
    Digite a média final:
    <input type="number" step="0.1" name="media">
    <input type="submit" value="Calcular">
</form>

<?php } ?>