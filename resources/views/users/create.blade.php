@extends('layouts.layout')
@section('title','Cadastro')
@section('main_content')
<div class="d-flex justify-content-center">
  <div
    class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-primary border-3 p-1">
    <h2>Cadastro de Usuário</h2>
  </div>
</div>
<div class="d-flex p-3"></div>
<form method="POST" action="{{ route('user.store') }}">
  @csrf
  <div class="d-flex justify-content-center t-4">
    <div class="bg-secondary bg-opacity-10 rounded border border-primary border-2 container-lg">
      <div class="d-flex m-1">
        <div class="d-flex flex-column p-1 w-50">
          <label for="inputNome" class="form-label">Nome *</label>
          @error('name')
            <strong>{{ "Esse campo deve ser preeenchido" }}</strong>
          @enderror
          <input id="name" type="text" class="form-control" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus
            placeholder="Jõao Souza da Silva" >
        </div>
        <div class="d-flex flex-column p-1 w-50">
          <label for="phone" class="form-label">Telefone *</label>
          <input type="text" class="form-control" id="phone" placeholder="4236264305" name="phone" value="{{ old('phone') }}">
          @error('phone')
              <strong>{{ "Esse campo deve ser preeenchido" }}</strong>
          @enderror
        </div>
      </div>
      <div class="d-flex m-1">
        <div class="d-flex flex-column p-1 w-50">
          <label for="inputEndereço" class="form-label">Endereço *</label>
          <input type="text" class="form-control" id="inputEndereço" placeholder="Rua Saldanha Marinho"
            name="address" value="{{ old('address') }}">
          @error('address')
              <strong>{{ "Esse campo deve ser preeenchido" }}</strong>
          @enderror
        </div>
        <div class="d-flex flex-column p-1 w-50">
          <label for="CPF" class="form-label">CPF *</label>
          <input type="text" class="form-control" id="cpf" placeholder="108.913.119.47" name="cpf" value="{{ old('cpf') }}">
          @error('cpf')
              <strong>{{ "Esse campo deve ser preeenchido" }}</strong>
          @enderror
        </div>
      </div>
      <div class="d-flex m-1">
        <div class="d-flex flex-column p-1 w-50">
          <label for="inputlogin" class="form-label">Email *</label>
          <input type="email" class="form-control" id="inputlogin"
            placeholder="seu-login123" name="email" value="{{ old('email') }}">
          @error('email')
              <strong>{{ "Esse campo deve ser preeenchido" }}</strong>
          @enderror
        </div>
        <div class="d-flex flex-column p-1 w-25">
          <label for="password" class="form-label">Senha *</label>
          <input type="password" class="form-control" id="password" placeholder="sua.senha.321"
            name="password" value="{{ old('password') }}">
            @error('password')
              <strong>{{ "Esse campo deve ser preeenchido" }}</strong>
          @enderror
        </div>
        <div class="d-flex flex-column p-1 w-25">
          <label for="password_confirmation" class="form-label">Confirmar Senha *</label>
          <input type="password" class="form-control" id="password_confirmation" placeholder="sua.senha.321"
            name="password_confirmation" value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
              <strong>{{ "Esse campo deve ser preeenchido" }}</strong>
          @enderror
        </div>
      </div>
      <div class="d-flex flex-row pb-3">
        <div class="d-flex flex-column p-1 w-50">
          <label for="password_confirmation" class="form-label">Função</label>
          <select class="form-select" aria-label="Default select example" name="type" value="{{ old('type') }}">
            <option selected>Abra para selecionar sua função</option>
            <option value="1">Gerente</option>
            <option value="2">Funcionário</option>
          </select>
        </div>
        <div class="ms-auto mt-3 p-1">
          <h4 class="fst-italic" style="color:red">Esse cadastro deve ser feito <br> na presença de um
            gerente!</h4>
        </div>
        <div class="ms-auto mt-auto p-1">
          <button type="submit" class=" btn btn-success btn-lg">
            {{ __('Registrar') }}
          </button>
        </div>
      </div>
    </div>
</form>
@endsection
