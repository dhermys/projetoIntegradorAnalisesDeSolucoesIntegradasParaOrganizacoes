<?php include 'php/conexao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclua o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login e Cadastro</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-color: #f7f7f7;
        }
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .toggle-group {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
    <script>
        function toggleForm(isLoginSelected) {
            document.getElementById('loginForm').style.display = isLoginSelected ? 'block' : 'none';
            document.getElementById('registerForm').style.display = isLoginSelected ? 'none' : 'block';
        }
    </script>
</head>
<body onload="toggleForm(true)">

<div class="container text-center">
    <div class="mb-4">
        <img src="/img/logo.png" alt="Logo" class="mb-4">
    </div>

    <!-- Formulário de Login -->
    <div id="loginForm" class="row">
        <div class="col">
        <form class="form-signin" action="php/login.php" method="post">
                <label for="inputEmail" class="sr-only">Endereço de email</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Endereço de email" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            </form>
        </div>
    </div>

    <!-- Formulário de Cadastro -->
    <div id="registerForm" class="row" style="display: none;">
        <div class="col">
            <form class="form-signin" action="php/registrar.php" method="post">
                <label for="inputName" class="sr-only">Nome completo</label>
                <input type="text" id="inputName" name="nome" class="form-control" placeholder="Nome completo" required autofocus>
                <label for="inputName" class="sr-only">E-mail</label>
                <input type="email" id="inputName" name="email" class="form-control" placeholder="Email" required autofocus>
                <label for="inputName" class="sr-only">Senha</label>
                <input type="password" id="inputName" name="senha" class="form-control" placeholder="Senha" required autofocus>
    
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipoUsuario" id="tipoColaborador" value="1" checked>
                        <label class="form-check-label" for="tipoColaborador">Usuário</label>
                    </div>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    <div class="toggle-group">
        <input type="radio" name="formToggle" id="loginToggle" checked onclick="toggleForm(true)">
        <label for="loginToggle">Entrar</label>
        <input type="radio" name="formToggle" id="registerToggle" onclick="toggleForm(false)">
        <label for="registerToggle">Cadastrar</label>
    </div>
    <p class="mt-5 mb-3 text-muted text-center">Serviços Gerais &copy; 2024</p>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>