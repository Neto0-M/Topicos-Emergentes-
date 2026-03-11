<?php 
include 'conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
   $contato = mysqli_fetch_assoc($resultado);
}else {
    echo "Contato não encontrado.";
    exit;
}

if (isset($_POST['atualizar'])) {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql_update = "UPDATE contatos SET nome='$nome', endereco='$endereco', telefone='$telefone' WHERE id=$id";

    if (mysqli_query($conexao, $sql_update)) {
        echo "Contato atualizado com sucesso.";
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar contato: " . mysqli_error($conexao);
    }
}
?>

<form method="post">
 
  Nome:  <input type="text" name="nome" value="<?php echo $contato['nome']; ?>" required><br><br>
  
  Endereco: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>" required><br><br>

  Telefone: <input type="text" name="telefone" value="<?php echo $contato['telefone']; ?>" required><br><br>

    <input type="submit" name="atualizar" value="atualizar">
</form>