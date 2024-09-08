<?php
session_start();

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['password']) ? $_POST['password'] : '';

    if ($email != '' && $senha != '') {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
            
            header('Location: ./carroussel.php');
            exit;
        } else {
            
            $_SESSION['erro_login'] = 'E-mail, senha ou tipo de usuário incorretos.';
            header('Location: ./login.php');
            exit;
        }
    } else {
        
        $_SESSION['erro_login'] = 'Preencha todos os campos.';
        header('Location: ../index.php');
        exit;
    }
} else {
    
    header('Location: login.php');
    exit;
}
?>