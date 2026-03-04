<?php
if ($_POST) {

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];

    echo "Nome: $nome <br>";

    if ($idade > 18) {
        echo "Minha idade é: $idade <br>";
        echo "Sexo: $sexo <br>";
        echo "Endereço: $endereco <br>";
    } else {
        echo "Menor de idade";
    }

} else {
?>

<form method="post">
    Nome: <input type="text" name="nome"><br><br>
    Endereço: <input type="text" name="endereco"><br><br>
    Idade: <input type="number" name="idade"><br><br>

    Sexo:
    <input type="radio" name="sexo" value="Masculino"> Masculino
    <input type="radio" name="sexo" value="Feminino"> Feminino
    <br><br>

    <input type="submit" value="Enviar">
</form>

<?php } ?>