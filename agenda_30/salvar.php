<?php
include ('conexao.php');

$nome= $_POST['nome'];
$endereco= $_POST['endereco'];  
$telefone= $_POST['fone'];

$sql= "INSERT INTO `contatos` (`nome`, `endereco`, `telefone`) 
VALUES ('$nome', '$endereco', '$telefone')";

if (mysqli_query($conexao, $sql)) {
    echo "Contato cadastrado com sucesso!";
    echo "<br><a href='index.php'>Voltar para a agenda</a>";
} else {
    echo "Erro ao cadastrar contato: " . mysqli_error($conexao);
    echo "<br><a href='index.php'>Voltar para a agenda</a>";
}
