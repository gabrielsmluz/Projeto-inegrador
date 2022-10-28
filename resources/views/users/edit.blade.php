@extends('layouts.layout')
@section('background','background_users')
@section('title','Cadastro')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="header h2 p-1">
    <h2>Alteração de Dados</h2>
  </div>
</div>
<form class="d-flex smcontainer container" method="POST" action="{{ route('user.update', $user->id) }}">
  @csrf
  @method('PUT')
  <div class="d-flex table justify-content-center mt-4">
    <div class="d-flex flex-column">
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input style="width: 231px;" id="name" type="text" class="form-control form-control-sm" name="name"
            value="{{ $user->name }}" placeholder="DO NOT ERASE">
            @error('name')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label for="inputNome" class=" label1">Nome</label>
        </div>
        <div class="flex-column mt-3 form-floating">
          <input style="width: 231px;" id="phone" type="text" class="form-control form-control-sm" name="phone"
            value="{{ $user->phone }}" placeholder="DO NOT ERASE">
            @error('phone')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label class="label1">Telefone</label>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input style="width: 231px;" id="address" type="text" class="form-control form-control-sm" name="address"
            value="{{ $user->address }}" placeholder="DO NOT ERASE">
            @error('address')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label class="label1">Endereço</label>
        </div>
        <div class="flex-column mt-3 form-floating">
          <input style="width: 231px;" id="cpf" type="text" class="form-control form-control-sm" name="cpf"
            value="{{ $user->cpf }}" placeholder="DO NOT ERASE">
            @error('cpf')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label class="label1">CPF</label>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input style="width: 231px;" id="email" type="text" class="form-control form-control-sm" name="email"
            value="{{ $user->email }}" placeholder="DO NOT ERASE">
            @error('email')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label class="label1">Email</label>
        </div>
        <div class="mt-3 d-flex form-floating">
          <select style="width: 232px;" name="type" class=" form-select" id="floatingSelect">
            <option name="type" value="manager">Gerente</option>
            <option selected name="type" value="employee">Funionário</option>
          </select>
          @error('type')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label class="label1" for="floatingSelect">Função</label>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="flex-column mt-3 form-floating">
          <input style="width: 231px;" id="password" type="password" class="form-control form-control-sm" name="password"
            value="" placeholder="DO NOT ERASE">
            @error('password')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label class="label1">Senha</label>
        </div>
        <div class="flex-column mt-3 form-floating">
          <input style="width: 231px;" id="password_confirmation" type="password" class="form-control form-control-sm"
            name="password_confirmation" value="" placeholder="DO NOT ERASE">
            @error('password_confirmation')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label class="label1">Confirmar Senha</label>
        </div>
      </div>
      <div class="d-flex justify-content-center flex-row">
        <div class="d-flex p-3">
          <button type="submit" class=" btn btn-success btn-lg">
            {{ __('Alterar Dados') }}
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
