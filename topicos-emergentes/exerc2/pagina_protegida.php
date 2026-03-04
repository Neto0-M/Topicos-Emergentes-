<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// Usuários cadastrados (exemplo simples)
if ($usuario == "admin" && $senha == "123") {
    echo "Bem-vindo $usuario - Cargo: Administrador";
}
elseif ($usuario == "joao" && $senha == "456") {
    echo "Bem-vindo $usuario - Cargo: Funcionário";
}
else {
    echo "Erro: usuário ou senha incorretos.";
}

?>