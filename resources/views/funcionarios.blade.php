<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <title>Funcionários</title>
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
  <div class="">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Visualização de Funcionários</h2>
    </div class="">
  </div>
  <div class="d-flex flex-column container-md">
  <div class="d-flex justify-content-end p-3">
    <a class="" href="#">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalFuncionario">Adicionar Novo Funcionário</button>
    </a>
    <div class="modal fade" id="ModalFuncionario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalFuncionario" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalCardapioLabel">Cadastro de Funcionário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="d-flex justify-content-center t-4">
                <div class="bg-secondary bg-opacity-10 rounded border border-success border-5 container-lg">
                  <div class="d-flex m-1">
                    <div class="d-flex flex-column p-1 w-100">
                      <label for="inputNomeCompleto" class="form-label">Nome Completo</label>
                      <input type="text" class="form-control" id="inputNomeCompleto" placeholder="Ciclano Soares Pereira">
                    </div>
                  </div>

                  <div class="d-flex m-1">
                    <div class="d-flex flex-column p-1 w-50">
                      <label for="inputCPF" class="form-label">CPF</label>
                      <input type="email" class="form-control" id="inputCPF" placeholder="108.913.119-47">
                    </div>
                    <div class="d-flex flex-column p-1 w-50">
                      <label for="inputTelefoneFuncionario" class="form-label">Telefone do Funcionário</label>
                      <input type="text" class="form-control" id="inputTelefoneFuncionario" placeholder="4236264305">
                    </div>
                  </div>
                  <div class="d-flex m-1">
                    <div class="d-flex flex-column p-1 w-50">
                      <label for="inputEndereço" class="form-label">Endereço</label>
                      <input type="text" class="form-control" id="inputEndereço" placeholder="Rua Saldanha Marinho">
                    </div>
                    <div class="d-flex flex-column p-1 w-25">
                      <label for="inputLogradouro" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="inputLogradouro" placeholder="1234">
                    </div>
                    <div class="d-flex flex-column p-1 w-25">
                      <label for="inputBairro" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="inputBairro" placeholder="Dos Estados">
                    </div>
                  </div>
                  <div class="d-flex m-1">
                    <div class="d-flex flex-column p-1 w-50">
                      <label for="inputCidade" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="inputCidade" placeholder="Curitiba">
                    </div>
                    <div class="d-flex flex-column p-1 w-25">
                      <label for="InputEstado" class="form-label">Estado(UF)</label>
                      <input class="form-control" list="datalistOptions" id="InputEstado" placeholder="Pesquise Aqui Seu Estado (UF)">
                      <datalist id="datalistOptions">
                        <option value="Acre">
                        <option value="Alagoas">
                        <option value="Amapá">
                        <option value="Amazonas">
                        <option value="Bahia">
                        <option value="Ceará">
                        <option value="Espírito Santo">
                        <option value="Goiais">
                        <option value="Maranhão">
                        <option value="Mato Grosso">
                        <option value="Mato Grosso do Sul">
                        <option value="Minas Gerais">
                        <option value="Pará">
                        <option value="Paraíba">
                        <option value="Paraná">
                        <option value="Pernambuco">
                        <option value="Piauí">
                        <option value="Rio de Janeiro">
                        <option value="Rio Grande do Norte">
                        <option value="Rio Grande do Sul ">
                        <option value="Rondônia">
                        <option value="Roraima">
                        <option value="Santa Catarina">
                        <option value="São Paulo">
                        <option value="Sergipe">
                        <option value="Tocantins">
                        <option value="Distrito Federal">
                      </datalist>
                    </div>
                    <div class="d-flex flex-column p-1 w-25">
                      <label for="inputCEP" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="inputCEP" placeholder="85420-169">
                    </div>
                  </div>
                  <div class="d-flex m-1">
                    <div class="d-flex flex-column p-1 w-50">
                      <label for="inputlogin" class="form-label">Login</label>
                      <input type="email" class="form-control" id="inputlogin" placeholder="seu-login123">
                    </div>
                    <div class="d-flex flex-column p-1 w-50">
                      <label for="inputSenha" class="form-label">Senha</label>
                      <input type="password" class="form-control" id="inputSenha" placeholder="sua.senha.321">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="d-flex justify-content-between modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Endereço</th>
          <th scope="col">Telefone</th>
          <th scope="col">Login</th>
          <th scope="col">Editar</th>
          <th scope="col">Remover</th>
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
          <td></td>
          <td></td>
          <td>
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
</body>

</html>
