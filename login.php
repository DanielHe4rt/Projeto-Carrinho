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

<body class="text-center">
    <form class="form-signin">
        <a id="icon_login"><img class="mb-4" title="Faça seu login" src="" alt="" width="72" height="72"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
        </a>
        <h1  class="h3 mb-3 font-weight-normal ">Faça login</h1>
        <label for="inputEmail" class="sr-only">Endereço de email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Insira seu Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar de mim
            </label>
        </div>
        <button class="btn btn-lg btn-info btn-block" type="submit">Login</button>
        <br>
        <button type="button" class="btn btn-outline-secondary btn-sm" ><a id="register" href="cadastro.php">Não tem conta? Faça seu cadastro aqui</a></button>
        <p class="mt-5 mb-3 text-muted">&copy; Projeto Integrador II - GTI2020</p>
    </form>
</body>

</html>