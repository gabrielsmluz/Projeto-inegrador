@extends('layouts.layout')
@section('title','Cadastro')
@section('main_content')
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Cadastro de Empresa</h2>
    </div>
  </div>
  <div class="d-flex p-3"></div>
  <form method="POST" action="{{ route('user.store') }}">
      @csrf
    <div class="d-flex justify-content-center t-4">
      <div class="bg-secondary bg-opacity-10 rounded border border-success border-5 container-lg">

        <div class="d-flex m-1">

        </div>

        <div class="d-flex m-1">


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
            <input type="text" class="form-control" id="inputEndereço" placeholder="Rua Saldanha Marinho" name="adress">
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="CPF" class="form-label">CPF *</label>
            <input type="text" class="form-control" id="cpf" placeholder="108.913.119.47" name="cpf">
          </div>


        </div>

        <div class="d-flex m-1">


          
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
          </div>
          <div class="d-flex flex-column p-1 w-25">
            <label for="password_confirmation" class="form-label">Confirmar Senha *</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="sua.senha.321" name="password_confirmation" required autocomplete="new-password">
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
