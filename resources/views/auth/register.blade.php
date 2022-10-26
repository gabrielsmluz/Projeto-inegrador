@extends('layouts.layout')
@section('background','background_register')
@section('title','Cadastro')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="header h2 p-1">
    <h2>Cadastro de Empresa e Usuário</h2>
  </div>
</div>
<form method="POST" action="{{ route('register') }}">
  @csrf
  <div class="d-flex flex-column container header p-3 mt-3">
    <div class="d-flex flex-row ms-auto me-auto">
      <div class="flex-column user column">
        <div class="d-flex justify-content-center mt-2 fst-italic text-decoration-underline text-white">
          <h2>Dados do Usuário</h2>
        </div>
        <div class="d-flex flex-row justify-content-center gap-3 container">
          <div class="flex-column">
            <div class="flex-column mt-3 form-floating">
              <input id="name" type="text" class="form-control form-control-sm" name="name"
                value="{{ old('name') }}" placeholder="DO NOT ERASE">
              @error('name')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label for="inputNome" class="">Nome</label>
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="phone" type="text" class="form-control form-control-sm" name="phone"
                value="{{ old('phone') }}" placeholder="DO NOT ERASE">
              @error('phone')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label class="">Telefone</label>
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="address" type="text" class="form-control form-control-sm" name="address"
                value="{{ old('address') }}" placeholder="DO NOT ERASE">
              @error('address')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label class="">Endereço</label>
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="CPF" type="text" class="form-control form-control-sm" name="cpf"
                value="{{ old('cpf') }}" placeholder="DO NOT ERASE">
              @error('cpf')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label class="">CPF</label>
            </div>
          </div>
          <div class="d-flex flex-column">
            <div class="flex-column mt-3 form-floating">
              <input id="email" type="email" class="form-control form-control-sm" name="email"
                value="{{ old('email') }}" placeholder="DO NOT ERASE">
              @error('email')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label class="">Email</label>
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="password" type="password" class="form-control form-control-sm" name="password"
                value="{{ old('') }}" placeholder="DO NOT ERASE">
              @error('password')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label class="">Senha</label>
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="password_confirmation" type="password" class="form-control form-control-sm"
                name="password_confirmation" value="{{ old('') }}"
                placeholder="DO NOT ERASE">
              @error('password_confirmation')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label class="">Confirmar Senha</label>
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
        </div>
      </div>
      <div class="d-flex flex-column establishment column ms-3 gap-3">
        <div class="d-flex justify-content-center mt-2 fst-italic text-decoration-underline text-white">
          <h2>Dados da Empresa</h2>
        </div>
        <div class="d-flex flex-column mt-3 me-3">
          <div class="d-flex flex-row gap-3">
            <div class="flex-column mt-3 form-floating">
              <input id="cnpj" type="text" class="form-control form-control-sm" name="cnpj"
                value="{{ old('cnpj') }}" placeholder="DO NOT ERASE">
              @error('cnpj')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label for="inputNome" class="">CNPJ</label>
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="trading_name" type="text" class="form-control form-control-sm"
                name="trading_name" value="{{ old('trading_name') }}"
                placeholder="DO NOT ERASE">
              @error('trading_name')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label for="inputNome" class="">Nome Fantasia</label>
            </div>
          </div>
          <div class="d-flex flex-row gap-3">
            <div class="flex-column mt-3 form-floating">
              <input id="company_name" type="text" class="form-control form-control-sm"
                name="company_name" value="{{ old('company_name') }}"
                placeholder="DO NOT ERASE">
              @error('company_name')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label for="company_name" class="">Razão Social </label>
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="establishment_phone" type="text" class="form-control form-control-sm"
                name="establishment_phone" value="{{ old('establishment_phone') }}"
                placeholder="DO NOT ERASE">
              @error('establishment_phone')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label for="inputNome" class="">Telefone (Estabelecimento)</label>
            </div>
          </div>
          <div class="flex-row">
            <div class="flex-column mt-3 form-floating">
              <input id="establishment_address" type="text" class="form-control form-control-sm"
                name="establishment_address"
                value="{{ old('establishment_address') }}" placeholder="DO NOT ERASE">
              @error('establishment_address')
                <span class="text-danger">
                  {{ $message }}
                </span>
              @enderror
              <label for="inputNome" class="">Endereço (Estabelecimento)</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center p-3">
      <button type="submit" class=" btn btn-success btn-lg">
        {{ __('Registrar') }}
      </button>
    </div>
  </div>
</form>
@endsection
