@extends('layouts.layout')
@section('title','Cadastro')
@section('main_content')
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Cadastro de Empresa</h2>
    </div>
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
            <label for="inputNome" class="form-label">Nome</label>
            @error('name')
                <span class="invalid-feedback" role="alert" name="name">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="inputTelefone" placeholder="4236264305" name="phone">
          </div>
        </div>
        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputEndereço" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="inputEndereço" placeholder="Rua Saldanha Marinho" name="adress">
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="inputLogradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="inputLogradouro" placeholder="1234" name="housenumbering">
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="inputBairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="inputBairro" placeholder="Dos Estados" name="district">
          </div>
        </div>
        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputCidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCidade" placeholder="Curitiba" name="city">
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="InputEstado" class="form-label">Estado(UF)</label>
            <input class="form-control" list="datalistOptions" id="InputEstado" placeholder="Pesquise Aqui Seu Estado (UF)" name="state">
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
            <input type="text" class="form-control" id="inputCEP" placeholder="85420-169" name="cep">
          </div>
        </div>
        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputlogin" class="form-label">---------</label>
            <input type="email" class="form-control" id="inputlogin" placeholder="seu-login123" name="">
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputSenha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="inputSenha" placeholder="sua.senha.321" name="password">
          </div>
        </div>
        <div class="d-flex justify-content-end p-3">
          <button type="submit" class=" btn btn-success btn-lg">
            {{ __('Registrar') }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endsection
