@extends('layouts.layout')
@section('background','background_users')
@section('title','Cadastro')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="header h2 p-1">
    <h2>Vizualização de Dados</h2>
  </div>
</div>
<div class="d-flex p-3"></div>
<form class="d-flex justify-content-center" method="" action="{{ route('user.index') }}">
  @csrf
  <div class="d-flex smcontainer table justify-content-center mt-4">
  <div class="d-flex flex-column">
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input id="name" type="text" readonly class="form-control form-control-sm" name="name"
            value="{{ $user->name }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Nome</label>
          @error('name')
            <span class="invalid-feedback" role="alert" name="name">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating">
          <input id="phone" type="text" readonly class="form-control form-control-sm" name="phone"
            value="{{ $user->phone }}" placeholder="DO NOT ERASE">
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
          <input id="address" type="text" readonly class="form-control form-control-sm" name="address"
            value="{{ $user->address }}" placeholder="DO NOT ERASE">
          <label class="label1">Endereço</label>
          @error('address')
            <span class="invalid-feedback" role="alert" name="address">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating">
          <input id="CPF" type="text" readonly class="form-control form-control-sm" name="cpf"
            value="{{ $user->cpf }}" placeholder="DO NOT ERASE">
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
          <input id="email" type="text" readonly class="form-control form-control-sm" name="email"
            value="{{ $user->email }}" placeholder="DO NOT ERASE">
          <label class="label1">Email</label>
          @error('email')
            <span class="invalid-feedback" role="alert" name="email">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div style="--bs-border-opacity: .3;"
          class="d-flex flex-column rounded border mt-auto ms-auto me-auto mb-2 pb-1 pt-1 ps-2 pe-2 border-1 border-secondary bg-light">
          <label for="type" class="">Função</label>
          <div class="d-flex flex-row gap-3">
            <div class="form-check">
              <input readonly class="form-check-input" type="radio" name="type" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Gerente
              </label>
            </div>
            <div class="form-check">
              <input readonly class="form-check-input" type="radio" name="type" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="type">
                Funcionário
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input id="password" type="password" readonly class="form-control form-control-sm" name="password"
            value="{{ $user->password }}" placeholder="DO NOT ERASE">
          <label class="label1">Senha</label>
          @error('password')
            <span class="invalid-feedback" role="alert" name="password">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating">
          <input id="password_confirmation" type="password" readonly class="form-control form-control-sm"
            name="password_confirmation" value="{{ $user->password }}" placeholder="DO NOT ERASE">
          <label class="label1">Confirmar Senha</label>
          @error('password_confirmation')
            <span class="invalid-feedback" role="alert" name="password_confirmation">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
      </div>
      <div class="d-flex justify-content-center flex-row">
        <div class="d-flex p-3">
          <button type="submit" class=" btn btn-success btn-lg">
            {{ __('Retornar') }}
          </button>
        </div>
      </div>
    </div>
    </div>
</form>
@endsection
