<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <title>Cadastro</title>
</head>

<body>
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
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Cadastro de Empresa</h2>
    </div class="">
  </div>
  <div class="d-flex p-3"></div>
  <form class="">
    <div class="d-flex justify-content-center t-4">
      <div class="bg-secondary bg-opacity-10 rounded border border-success border-5 container-lg">
        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputCNPJ" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="inputCNPJ" placeholder="12.345.678/0001-23">
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputRazãoSocial" class="form-label">Razão Social</label>
            <input type="text" class="form-control" id="inputRazãoSocial" placeholder="Leitão da Luz Ltda.">
          </div>
        </div>
        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputNomeFantasia" class="form-label">Nome Fantasia</label>
            <input type="text" class="form-control" id="inputNomeFantasia" placeholder="Brigadeiria Leitão da Luz">
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputTelefonedoEstabelecimento" class="form-label">Telefone do Estabelecimento</label>
            <input type="text" class="form-control" id="inputTelefonedoEstabelecimento" placeholder="42998032047">
          </div>
        </div>
        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputGerenteResponsável" class="form-label">Gerente Responsável</label>
            <input type="email" class="form-control" id="inputGerenteResponsável" placeholder="Fulano Souza da Silva">
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputTelefoneGerente" class="form-label">Telefone do Gerente</label>
            <input type="text" class="form-control" id="inputTelefoneGerente" placeholder="4236264305">
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
        <div class="d-flex justify-content-end p-3">
          <button type="submit" class=" btn btn-success btn-lg">Alterar Dados</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>
