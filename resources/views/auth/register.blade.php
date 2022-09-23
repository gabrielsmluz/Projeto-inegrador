@extends('layouts.layout')
@section('title','Cadastro')
@section('main_content')
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Cadastro de Empresa</h2>
    </div>
  </div>
  <div class="d-flex p-3"></div>
  <form method="POST" action="{{ route('register') }}">
      @csrf
    <div class="d-flex justify-content-center t-4">
      <div class="bg-secondary bg-opacity-10 rounded border border-success border-5 container-lg">

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputCNPJ" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="inputCNPJ" placeholder="12.345.678/0001-23" disabled>
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputRazãoSocial" class="form-label">Razão Social</label>
            <input type="text" class="form-control" id="inputRazãoSocial" placeholder="Leitão da Luz Ltda." disabled>
          </div>
        </div>

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputNomeFantasia" class="form-label">Nome Fantasia</label>
            <input type="text" class="form-control" id="inputNomeFantasia" placeholder="Brigadeiria Leitão da Luz" disabled>
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputTelefonedoEstabelecimento" class="form-label">Telefone do Estabelecimento</label>
            <input type="text" class="form-control" id="inputTelefonedoEstabelecimento" placeholder="42998032047" disabled>

          </div>
        </div>

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputNome" class="form-label">Nome *</label>
            @error('name')
                <span class="invalid-feedback" role="alert" name="name">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Jõao Souza da Silva">
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="phone" class="form-label">Telefone *</label>
            <input type="text" class="form-control" id="phone" placeholder="4236264305" name="phone">
          </div>
        </div>

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-25">
            <label for="inputEndereço" class="form-label">Endereço *</label>
            <input type="text" class="form-control" id="inputEndereço" placeholder="Rua Saldanha Marinho" name="address">
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="CPF" class="form-label">CPF *</label>
            <input type="text" class="form-control" id="cpf" placeholder="108.913.119.47" name="cpf">
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="inputLogradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="inputLogradouro" placeholder="1234" name="housenumbering" disabled>
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="inputBairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="inputBairro" placeholder="Dos Estados" name="district" disabled>
          </div>
        </div>

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputCidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCidade" placeholder="Curitiba" name="city" disabled>
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="InputEstado" class="form-label">Estado(UF)</label>
            <input class="form-control" list="datalistOptions" id="InputEstado" placeholder="Pesquise Aqui Seu Estado (UF)" name="state" disabled>
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
            <input type="text" class="form-control" id="inputCEP" placeholder="85420-169" name="cep" disabled>
          </div>
        </div>

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputlogin" class="form-label">Email *</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputlogin" placeholder="seu-login123" name="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="password" class="form-label">Senha *</label>
            <input type="password" class="form-control" id="password" placeholder="sua.senha.321" name="password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="password_confirmation" class="form-label">Confirmar Senha *</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="sua.senha.321" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>


        <div class="d-flex flex-column gap-1 p-1 border rounded border-primary">
        <label for="type" class="">Função *</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Gerente
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="type">
            Funcionário
          </label>
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
