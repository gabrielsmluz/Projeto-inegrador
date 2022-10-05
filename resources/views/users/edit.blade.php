@extends('layouts.layout')
@section('title','Cadastro')
@section('main_content')
<div class="d-flex justify-content-center">
  <div
    class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-primary border-2 p-1">
    <h2>Alteração de Dados</h2>
  </div>
</div>
<form method="POST" action="{{ route('user.update', $user->id) }}">
  @csrf
  @method('PUT')
  <div class="justify-content-center d-flex mt-4">
    <div class="bg-secondary bg-opacity-10 rounded border border-primary border-2">
      <div class="d-flex flex-row justify-content-center gap-3 container">
        <div class="flex-column">
          <div class="flex-column mt-3 form-floating">
            <input id="name" type="text" class="form-control form-control-sm" name="name"
              value="{{ $user->name }}" placeholder="DO NOT ERASE">
            <label for="inputNome" class="">Nome</label>
            @error('name')
              <span class="invalid-feedback" role="alert" name="name">
                {{ "Esse campo deve ser preenchido" }}
              </span>
            @enderror
          </div>
          <div class="flex-column mt-3 form-floating">
            <input id="phone" type="text" class="form-control form-control-sm" name="phone"
              value="{{ $user->phone }}" placeholder="DO NOT ERASE">
            <label class="">Telefone</label>
            @error('phone')
              <span class="invalid-feedback" role="alert" name="phone">
                {{ "Esse campo deve ser preenchido" }}
              </span>
            @enderror
          </div>
          <div class="flex-column mt-3 form-floating">
            <input id="address" type="text" class="form-control form-control-sm" name="address"
              value="{{ $user->address }}" placeholder="DO NOT ERASE">
            <label class="">Endereço</label>
            @error('address')
              <span class="invalid-feedback" role="alert" name="address">
                {{ "Esse campo deve ser preenchido" }}
              </span>
            @enderror
          </div>
          <div class="flex-column mt-3 form-floating">
            <input id="CPF" type="text" class="form-control form-control-sm" name="CPF"
              value="{{ $user->CPF }}" placeholder="DO NOT ERASE">
            <label class="">CPF</label>
            @error('CPF')
              <span class="invalid-feedback" role="alert" name="CPF">
                {{ "Esse campo deve ser preenchido" }}
              </span>
            @enderror
          </div>
        </div>
        <div class="d-flex flex-column">
          <div class="flex-column mt-3 form-floating">
            <input id="email" type="text" class="form-control form-control-sm" name="email"
              value="{{ $user->email }}" placeholder="DO NOT ERASE">
            <label class="">Email</label>
            @error('email')
              <span class="invalid-feedback" role="alert" name="email">
                {{ "Esse campo deve ser preenchido" }}
              </span>
            @enderror
          </div>
          <div class="flex-column mt-3 form-floating">
            <input id="password" type="password" class="form-control form-control-sm" name="password"
              value="{{ $user->password }}" placeholder="DO NOT ERASE">
            <label class="">Senha</label>
            @error('password')
              <span class="invalid-feedback" role="alert" name="password">
                {{ "Esse campo deve ser preenchido" }}
              </span>
            @enderror
          </div>
          <div class="flex-column mt-3 form-floating">
            <input id="password_confirmation" type="password" class="form-control form-control-sm" name="password_confirmation"
              value="{{ $user->password }}" placeholder="DO NOT ERASE">
            <label class="">Confirmar Senha</label>
            @error('password_confirmation')
              <span class="invalid-feedback" role="alert" name="password_confirmation">
                {{ "Esse campo deve ser preenchido" }}
              </span>
            @enderror
          </div>
          <div style="--bs-border-opacity: .3;" class="d-flex flex-column mt-auto ms-auto me-auto rounded border pt-2 ps-3 pe-3 border-1 border-secondary bg-light">
            <label for="type" class="">Função</label>
            <div class="d-flex flex-row gap-3">
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
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center p-3">
        <button type="submit" class=" btn btn-success btn-lg">
          {{ __('Alterar Dados') }}
        </button>
      </div>
    </div>
  </div>
</form>
@endsection
