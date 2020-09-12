<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="../Projeto Integrador II/estilo/css/register_style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/icon-login.webp">
  <title>Cadastro</title>
</head>

<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
      <a id="icon_register"><img class="d-block mx-auto mb-4" title="Cadastro" alt="">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
        </svg>
      </a>
      <h2>Cadastro de Usuário</h2>
      <p class="lead">Abaixo temos um Formulário para ser efetuado seu cadastro (caso ainda não possua conta). Favor preencher tudo corretamente.</p>
    </div>

    <div class="col-md-8 order-md-1">
      <form id="register" class="needs-validation" method="POST" action="register.php" novalidate>
      <input type="hidden" name="serionaozoameusistema" value="register-auth">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="primeiroNome">Nome</label>
            <input type="text" class="form-control" name="first_name" id="primeiroNome" placeholder="Insira seu Nome" value="" required>
            <div class="invalid-feedback">
              É obrigatório inserir um nome válido.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" name="last_name" id="sobrenome" placeholder="Insira seu Sobrenome" value="" required>
            <div class="invalid-feedback">
              É obrigatório inserir um sobrenome válido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" name="email" class="form-control" id="email" placeholder="exemplo@email.com">
          <div class="invalid-feedback">
            Por favor, insira um endereço de e-mail válido.
          </div>
        </div>

        <div class="form-group">
          <label for="InputPassword1">Senha</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Digite uma Senha">
          <div class="invalid-feedback">
            Por favor, insira uma Senha.
          </div>
        </div>

        <div class="form-group">
          <label for="ConfirmPassword1">Confirmação da Senha</label>
          <input type="password" name="confirm_password" class="form-control" id="ConfirmPassword1" placeholder="Digite sua Senha novamente">
          <div class="invalid-feedback">
            As senhas não conferem.
          </div>
        </div>

        <div class="mb-3">
          <label for="endereco">Endereço</label>
          <input type="text" class="form-control" id="endereco" placeholder="Bairro, Rua, nº" required>
          <div class="invalid-feedback">
            Por favor, insira seu endereço.
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="estado">Estado</label>
            <select class="custom-select d-block w-100" id="estado" required>
              <option value="">Escolha...</option>
              <option>Paraná (PR)</option>
              <option>Santa Catarina (SC)</option>
              <option>Rio Grande do Sul (RS)</option>
            </select>
            <div class="invalid-feedback">
              Por favor, insira um estado válido.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" placeholder="Insira seu CEP" required>
            <div class="invalid-feedback">
              É obrigatório inserir um CEP.
            </div>
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-info btn-block btn-lg" type="submit">Cadastrar Usuário</button>
      </form>
    </div>
  </div>

  <footer class="my-1 pt-0 text-muted text-center text-small ">
    <p class="mt-5 mb-3 text-muted">&copy; Projeto Integrador II - GTI2020</p>
  </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>