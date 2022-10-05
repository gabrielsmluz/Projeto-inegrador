@extends('layouts.layout')
@section('title','Cadastro')
@section('main_content')
<div class="d-flex justify-content-center">
  <div
    class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-primary border-2 p-1">
    <h2>Vizualização de Dados</h2>
  </div>
</div>
<div class="d-flex p-3"></div>
<form method="" action="{{ route('user.index') }}">
  @csrf
  <div class="d-flex justify-content-center t-4">
    <div class="bg-secondary bg-opacity-10 rounded border border-primary border-3 container-lg">
      <div class="d-flex m-1">
        <div class="d-flex flex-column p-1 w-50">
          <label for="inputNome" class="form-label">Nome *</label>
          <input id="name" type="text" readonly class="form-control" name="name"
            value="{{ old('name') }}" placeholder="{{ $user->name }}">
        </div>
        <div class="d-flex flex-column p-1 w-50">
          <label for="phone" class="form-label">Telefone *</label>
          <input type="text" readonly class="form-control" id="phone" placeholder="{{ $user->phone }}"
            name="phone">
        </div>
      </div>
      <div class="d-flex m-1">
        <div class="d-flex flex-column p-1 w-25">
          <label for="inputEndereço" class="form-label">Endereço *</label>
          <input type="text" readonly class="form-control" id="inputEndereço"
            placeholder="{{ $user->address }}" name="address">
        </div>
        <div class="d-flex flex-column p-1 w-25">
          <label for="CPF" class="form-label">CPF *</label>
          <input type="text" readonly class="form-control" id="cpf" placeholder="{{ $user->cpf }}"
            name="cpf">
        </div>
        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1">
            <label for="inputlogin" class="form-label">Email *</label>
            <input type="email" readonly class="form-control @error('email') is-invalid @enderror"
              id="inputlogin" placeholder="{{ $user->email }}" name="email">
          </div>
        </div>

        <div style="--bs-border-opacity: .3;"
          class="d-flex flex-column mt-auto ms-auto me-auto rounded border mb-2 pt-2 ps-3 pe-3 border-1 border-secondary bg-light">
          <label for="type" class="">Função</label>
          <div class="d-flex flex-row gap-3">
            <div class="form-check">
              <input readonly class="form-check-input" type="radio" name="type" id="flexRadioDefault1"
                placeholder="{{ $user->type }}">
              <label class="form-check-label" for="flexRadioDefault1">
                Gerente
              </label>
            </div>
            <div class="form-check">
              <input readonly class="form-check-input" type="radio" name="type" id="flexRadioDefault2"
                placeholder="{{ $user->type }}">
              <label class="form-check-label" for="type">
                Funcionário
              </label>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end mt-2 p-3">
          <button type="submit" class=" btn btn-success btn-lg">
            {{ __('Retornar') }}
          </button>
        </div>
      </div>
    </div>
</form>
@endsection
