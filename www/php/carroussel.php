<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Feed de Imagens</title>
    <style>
        .image-post {
            margin-bottom: 20px;
        }
        .img-fluid {
            max-height: 400px;
            width: auto;
            display: block;
            margin: 0 auto;
        }
        body {
            background-color: #f0f0f0;
        }
        .like-dislike-buttons {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .service-form {
            display: none;
            margin-top: 10px;
        }
        .info-message {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
            color: #28a745; 
        }
        .is-invalid {
            border-color: red; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../img/header.png" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        <div id="imageFeed_1" class="carousel slide" data-ride="carousel" data-interval="10000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="info-message">Clique na imagem para abrir um chamado!</div>
                    <img src="../img/3.jpg" class="d-block img-fluid" alt="Adicionar descrição da imagem" onclick="showServiceForm(this)">
                    <div class="service-form">
                        <input type="date" placeholder="Data do Serviço" class="form-control" required>
                        <input type="text" placeholder="Descrição do Serviço" class="form-control" required>
                        <input type="text" placeholder="Telefone" class="form-control" required>
                        <input type="text" placeholder="Nome do Solicitante" class="form-control" required>
                        <button class="btn btn-success" onclick="submitRequest(this)">Confirmar Solicitação</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="info-message">Clique na imagem para abrir um chamado!</div>
                    <img src="../img/1.jpg" class="d-block img-fluid" alt="Adicionar descrição da imagem" onclick="showServiceForm(this)">
                    <div class="service-form">
                        <input type="date" placeholder="Data do Serviço" class="form-control" required>
                        <input type="text" placeholder="Descrição do Serviço" class="form-control" required>
                        <input type="text" placeholder="Telefone" class="form-control" required>
                        <input type="text" placeholder="Nome do Solicitante" class="form-control" required>
                        <button class="btn btn-success" onclick="submitRequest(this)">Confirmar Solicitação</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="info-message">Clique na imagem para abrir um chamado!</div>
                    <img src="../img/2.jpg" class="d-block img-fluid" alt="Adicionar descrição da imagem" onclick="showServiceForm(this)">
                    <div class="service-form">
                        <input type="date" placeholder="Data do Serviço" class="form-control" required>
                        <input type="text" placeholder="Descrição do Serviço" class="form-control" required>
                        <input type="text" placeholder="Telefone" class="form-control" required>
                        <input type="text" placeholder="Nome do Solicitante" class="form-control" required>
                        <button class="btn btn-success" onclick="submitRequest(this)">Confirmar Solicitação</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#imageFeed_1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#imageFeed_1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <div id="confirmationMessage" class="info-message" style="display: none;">
            Solicitação enviada com sucesso!
            <button class="btn btn-link" onclick="hideConfirmationMessage()">Fechar</button>
        </div>
    </div>

    <script>
        function showServiceForm(image) {
            const form = image.nextElementSibling;
            form.style.display = form.style.display === 'block' ? 'none' : 'block';
        }

        function submitRequest(button) {
            const form = button.parentElement;
            const inputs = form.querySelectorAll('input');
            let allFilled = true;

            inputs.forEach(input => {
                if (input.value.trim() === '') {
                    allFilled = false;
                    input.classList.add('is-invalid'); 
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (!allFilled) {
                alert('Por favor, preencha todos os campos antes de enviar a solicitação.');
                return; 
            }

            const confirmationMessage = document.getElementById('confirmationMessage');
            confirmationMessage.style.display = 'block';

            inputs.forEach(input => input.value = ''); 
            form.style.display = 'none'; 
        }

        function hideConfirmationMessage() {
            const confirmationMessage = document.getElementById('confirmationMessage');
            confirmationMessage.style.display = 'none';
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>