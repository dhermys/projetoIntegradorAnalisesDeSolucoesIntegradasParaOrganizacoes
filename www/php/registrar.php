<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipoUsuario = isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : '0';
    

    error_log("Dados do formulário recebidos: Nome: $nome, Email: $email, Senha: $senha, Tipo de Usuário: $tipoUsuario");

    $sql = "INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha, $tipoUsuario]);


    if ($stmt->rowCount() > 0) {
        error_log("Inserção no banco de dados bem-sucedida.");
    } else {
        error_log("Falha ao inserir no banco de dados.");
    }

    header("Location: ../index.php");
}
?>