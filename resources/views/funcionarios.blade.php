@extends('layouts.layout')
@section('title','Funcionários')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2 class="">Vizualização de Funcionários</h2>
  </div>
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
@endsection
