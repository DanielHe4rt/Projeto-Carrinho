<?php
    session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../Projeto Integrador II/estilo/css/login_style.css" rel="stylesheet">
    <link rel="icon" href="img/icon-login.webp">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 ">
            <form class="form-signin" method="POST" action="auth.php">
                <a id="icon_login"><img class="mb-4" title="Faça seu login" alt=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </a>
                <h1 class="h3 mb-3 font-weight-normal ">Bem vindo</h1>
                <label for="inputLogin" class="sr-only">Endereço de email</label>
                <input type="text" name="login" class="form-control" placeholder="Nome de Usuario" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                <input type="hidden" name="serionaozoameusistema" value="login-auth">
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar de mim
                    </label>
                </div>
                <button class="btn btn-lg btn-info btn-block login_btn" value="Login" type="submit">Login</button>
                <br>
                <button type="button" class="btn btn-outline-secondary btn-sm"><a id="register" href="cadastro.php">Não tem conta? Faça seu cadastro aqui</a></button>
                <br>
                <br>
               
                <p class="mt-4 mb-3 text-muted">&copy; Projeto Integrador II - GTI2020</p>
                <a href="produtos.php" class="back">Voltar a página principal sem fazer login</a>
            </form></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>