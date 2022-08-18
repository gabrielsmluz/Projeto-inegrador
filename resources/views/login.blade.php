<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <title>Login</title>
</head>

<body class="text-center">
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="login.html">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cardapio.html">Cardápios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="produtos.html">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="verpedidos.html">Ver Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="funcionarios.html">Funcionários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cadastro.html">Dados da Empresa</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="d-flex p-3"></div>

  <main class="form-signin w-25 d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
    <div class="d-flex justify-content-center">
      <form class="p-3">
        <h1 class="h3 mb-3 fw-normal">Login do Gerente Responsável</h1>

        <div class="form-floating">
          <input type="text" class="form-control" id="InputLogin" placeholder="seu.login.123">
          <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="sua.senha.321">
          <label for="floatingPassword">Senha</label>
        </div>

        <div class="checkbox d-flex mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembre-se
          </label>
        </div>
        <div class="d-flex flex-row justify-content-between">
          <a class="w-1 btn btn-lg btn-primary" href="cadastro.html" role="button">Cadastrar-se</a>
          <button class="w-1 btn btn-lg btn-success" type="submit">Entrar</button>
        </div>
      </form>
  </main>
</body>

</html>
