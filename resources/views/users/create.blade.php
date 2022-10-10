@extends('layouts.layout')
@section('background','background_users')
@section('title','Cadastro')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="header h2 p-1">
    <h2>Cadastro de Usuário</h2>
  </div>
</div>
<div class="d-flex p-3"></div>
<form method="POST" action="{{ route('user.store') }}">
  @csrf
  <div class="d-flex smcontainer table justify-content-center container-lg">
    <div class="d-flex flex-column">
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input id="name" type="text" class="form-control form-control-sm" name="name"
            value="{{ old('name') }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Nome</label>
          @error('name')
            <span class="invalid-feedback" role="alert" name="name">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating">
          <input id="phone" type="text" class="form-control form-control-sm" name="phone"
            value="{{ old('phone') }}" placeholder="DO NOT ERASE">
          <label class="label1">Telefone</label>
          @error('phone')
            <span class="invalid-feedback" role="alert" name="phone">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input id="address" type="text" class="form-control form-control-sm" name="address"
            value="{{ old('address') }}" placeholder="DO NOT ERASE">
          <label class="label1">Endereço</label>
          @error('address')
            <span class="invalid-feedback" role="alert" name="address">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating">
          <input id="CPF" type="text" class="form-control form-control-sm" name="cpf"
            value="{{ old('cpf') }}" placeholder="DO NOT ERASE">
          <label class="label1">CPF</label>
          @error('cpf')
            <span class="invalid-feedback" role="alert" name="cpf">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input id="email" type="text" class="form-control form-control-sm" name="email"
            value="{{ old('email') }}" placeholder="DO NOT ERASE">
          <label class="label1">Email</label>
          @error('email')
            <span class="invalid-feedback" role="alert" name="email">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="mt-3 d-flex form-floating">
          <select name="type" class=" form-select" id="floatingSelect">
            <option selected>Abrir o menu de seleção</option>
            <option name="type" value="manager">Gerente</option>
            <option name="type" value="employee">Funionário</option>
          </select>
          <label class="label1" for="floatingSelect">Função</label>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input id="password" type="password" class="form-control form-control-sm" name="password"
            value="{{ old('password') }}" placeholder="DO NOT ERASE">
          <label class="label1">Senha</label>
          @error('password')
            <span class="invalid-feedback" role="alert" name="password">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating">
          <input id="password_confirmation" type="password" class="form-control form-control-sm"
            name="password_confirmation" value="{{ old('password_confirmation') }}"
            placeholder="DO NOT ERASE">
          <label class="label1">Confirmar Senha</label>
          @error('password_confirmation')
            <span class="invalid-feedback" role="alert" name="password_confirmation" value="{{ old('password_confirmation') }}">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
      </div>
      <div class="d-flex justify-content-center flex-row">
        <div class="d-flex p-3">
          <button type="submit" class=" btn btn-success btn-lg">
            {{ __('Cadastrar Dados') }}
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
