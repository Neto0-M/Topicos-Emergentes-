<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
</head>
<body>
    <h1>Agenda de contatos</h1>
    <h2>Cadastrar contato</h2>
    <form action="salvar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <?php 
    include ('conexao.php');
    $sql = "SELECT * FROM contatos";
    $resultado = mysqli_query($conexao, $sql);

   if(mysqli_num_rows($resultado)> 0){
    while ($linha = mysqli_fetch_assoc($resultado)){
        echo "ID: " . $linha['id'] . "<br>";
        echo "Nome: " . $linha['nome'] . "<br>";
        echo "Endereço: " . $linha['endereco'] . "<br>";
        echo "Telefone: " . $linha['telefone'] . "<br><hr>";
    }


   }else{
    echo "Nenhum contato encontrado.";
   }

   ?>
</body>
</html>