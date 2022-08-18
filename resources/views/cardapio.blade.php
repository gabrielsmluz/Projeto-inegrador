<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <title>Cardápios</title>
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




  <div class="d-flex flex-column">
    <div class="">
    <div class="d-inline-flex justify-content-center bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2 class="">Gerenciamento de Cardápios</h2>
    </div>
    </div>
    <div class="container">
      <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCardapio">Criar Novo Cardápio</button>
      </div>
      <div class="modal fade" id="ModalCardapio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalCardapio" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalCardapioLabel">Novo Cardápio</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="d-flex justify-content-center flex-column">
                <div class="d-flex flex-row">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome do Cardápio</span>
                    <input type="text" class="form-control" placeholder="Cardapio 1" aria-label="nome do cardapio" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="dflex input-group flex-row">
                  <label class="input-group-text" for="inputGroupSelect01">Adicionar Produto</label>
                  <select class="form-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <a href="#">
                    <img class="d-flex align-items-center p-1" src="blueadd.ico" alt="" height="30" width="30">
                  </a>
                </div>
                <div class="d-flex bg-secondary bg-opacity-10 border-success border border-3 p-3 m-1 container-lg rounded justify-content-center">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Data Criação</th>
                        <th scope="col">Ativo</th>
                        <th scope="col">Ver/Editar</th>
                        <th scope="col">Remover</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
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
            <div class="d-flex justify-content-between modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </div>
      </div>



  <div class="d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 m-3 container-lg rounded">
    <table class="table table-bordered table-hover table-lg">
      <thead>
        <tr>
          <th scope="col">Título</th>
          <th scope="col">Data Criação</th>
          <th scope="col">Ativo</th>
          <th scope="col">Ver/Editar</th>
          <th scope="col">Remover</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>
            <label class="d-flex toggle justify-content-center m-1" for="ToggleTela">
              <input class="toggle__input" name="" type="checkbox" id="ToggleTela">
              <div class="toggle__fill"></div>
            </label>
          </td>
          <td>
            <div class="d-flex justify-content-center p-1">
              <a href="editarcardapio.html">
                <img src="edit2.png" alt="" height=30 width="30" class="">
              </a>
            </div>
          </td>
          <td>
            <div class="d-flex justify-content-center p-1">
              <button type="button" name="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <img src="lixeira.png" alt="" height=30 width="30" class="">
              </button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Tem Certeza que deseja deletar esse cardápio?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-evenly">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-danger">Sim, Remover</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
