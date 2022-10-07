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
              <label for="inputNome" class="">Nome</label>
              @error('name')
                <span class="invalid-feedback" role="alert" name="name">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="phone" type="text" class="form-control form-control-sm" name="phone"
                value="{{ old('phone') }}" placeholder="DO NOT ERASE">
              <label class="">Telefone</label>
              @error('phone')
                <span class="invalid-feedback" role="alert" name="phone">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="address" type="text" class="form-control form-control-sm" name="address"
                value="{{ old('address') }}" placeholder="DO NOT ERASE">
              <label class="">Endereço</label>
              @error('address')
                <span class="invalid-feedback" role="alert" name="address">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="CPF" type="text" class="form-control form-control-sm" name="cpf"
                value="{{ old('cpf') }}" placeholder="DO NOT ERASE">
              <label class="">CPF</label>
              @error('cpf')
                <span class="invalid-feedback" role="alert" name="CPF">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
          </div>
          <div class="d-flex flex-column">
            <div class="flex-column mt-3 form-floating">
              <input id="email" type="teestablishment_addressr preenchido" }}
                </span>
              @enderror
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="password" type="password" class="form-control form-control-sm" name="password"
                value="{{ old('password') }}" placeholder="DO NOT ERASE">
              <label class="">Senha</label>
              @error('password')
                <span class="invalid-feedback" role="alert" name="password">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="password_confirmation" type="password" class="form-control form-control-sm"
                name="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="DO NOT ERASE">
              <label class="">Confirmar Senha</label>
              @error('password_confirmation')
                <span class="invalid-feedback" role="alert" name="password_confirmation">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
            <div style="--bs-border-opacity: .3;"
              class="d-flex flex-column mt-auto ms-auto me-auto rounded border pt-2 ps-3 pe-3 border-1 border-secondary bg-light">
              <label for="type" class="">Função</label>
              <div class="d-flex flex-row gap-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Gerente
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2"
                    checked>
                  <label class="form-check-label" for="type">
                    Funcionário
                  </label>
                </div>
              </div>
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
              <label for="inputNome" class="">CNPJ</label>
              @error('cnpj')
                <span class="invalid-feedback" role="alert" name="cnpj">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="trading_name" type="text" class="form-control form-control-sm"
                name="trading_name" value="{{ old('trading_name') }}"
                placeholder="DO NOT ERASE">
              <label for="inputNome" class="">Nome Fantasia</label>
              @error('cnpj')
                <span class="invalid-feedback" role="alert" name="cnpj">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
          </div>
          <div class="d-flex flex-row gap-3">
            <div class="flex-column mt-3 form-floating">
              <input id="company_name" type="text" class="form-control form-control-sm"
                name="company_name" value="{{ old('company_name') }}"
                placeholder="DO NOT ERASE">
              <label for="company_name" class="">Razão Social </label>
              @error('company_name')
                <span class="invalid-feedback" role="alert" name="fantasy_name">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
            <div class="flex-column mt-3 form-floating">
              <input id="establishment_phone" type="text" class="form-control form-control-sm"
                name="establishment_phone" value="{{ old('establishment_phone') }}"
                placeholder="DO NOT ERASE">
              <label for="inputNome" class="">Telefone (Estabelecimento)</label>
              @error('establishment_phone')
                <span class="invalid-feedback" role="alert" name="establishment_phone">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
            </div>
          </div>
          <div class="flex-row">
            <div class="flex-column mt-3 form-floating">
              <input id="establishment_address" type="text" class="form-control form-control-sm"
                name="establishment_address"
                value="{{ old('establishment_address') }}" placeholder="DO NOT ERASE">
              <label for="inputNome" class="">Endereço (Estabelecimento)</label>
              @error('establishment_address')
                <span class="invalid-feedback" role="alert" name="establishment_address">
                  {{ "Esse campo deve ser preenchido" }}
                </span>
              @enderror
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
