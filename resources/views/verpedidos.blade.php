<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <title>Pedidos</title>
  <style>
    .toggle {
      --width: 50px;
      --height: calc(var(--width) / 2);
      --border-radius: calc(var(--height) / 2);

      display: inline-block;
      cursor: pointer;
    }

    .toggle__input {
      display: none;
    }

    .toggle__fill {
      position: relative;
      width: var(--width);
      height: var(--height);
      border-radius: var(--border-radius);
      background: #dddddd;
      transition: background 0.2s;
    }

    .toggle__input:checked~.toggle__fill {
      background: #009578;
    }

    .toggle__fill::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: var(--height);
      width: var(--height);
      background: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
      border-radius: var(--border-radius);
      transition: transform 0.2s;
    }

    .toggle__input:checked~.toggle__fill::after {
      transform: translateX(var(--height));
    }
  </style>
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
  <div class="d-flex flex-column p-2">
    <div>
      <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
        <h2>Visualização de Pedidos</h2>
      </div>
    </div>
    <div class="d-flex p-3"></div>

      <div class="d-flex flex-column container-md">
        <div class="d-flex align-items-center p-3">
            <div class="">
              <p class="">Pedidos realizados no dia:</p>
            </div>
          <div class="">
            <input type="date" name="" value="">
            <a href="">
              <img src="calendar.png" alt="" height="30" width="30">
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">Número</th>
                <th scope="col">Mesa</th>
                <th scope="col">Status</th>
                <th scope="col">Horário</th>
                <th scope="col">Itens</th>
                <th scope="col">Vizualizar/Editar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>
                  <label class="d-flex toggle justify-content-center m-1" for="myToggle">
                    <input class="toggle__input" name="" type="checkbox" id="myToggle">
                    <div class="toggle__fill"></div>
                  </label>
                </td>
                <td>
                  <button type="button" class="btn btn-success">Success</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>sabonete</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>

</html>
