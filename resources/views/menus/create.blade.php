@extends('layouts.layout')
@section('background','background_menus')
@section('title','Criação de Cardápio')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="d-inline-flex header h2 p-1">
    <h2>Criação de Cardápio</h2>
  </div class="">
</div>
<form class="d-flex mt-5" method="POST" action="{{ route('menu.store') }}">
  @csrf
  <div class="d-flex mt-3 p-3 table smcontainer justify-content-center container-lg">
    <div class="d-flex flex-column">
      <div class="d-flex flex-row">
        <div class="flex-column form-floating flex-fill">
          <input id="name" type="text" class="form-control" name="name"
            value="{{ old('name') }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Nome do Cardápio</label>
          @error('name')
            <span class="invalid-feedback" role="alert" name="name">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="d-flex form-floating">
          <select id="floatingSelect" class="il2 form-select form-select-lg bg-white"
            name="is_available" value="{{ old('is_available') }}">
            <option selected value="Disponível">Disponível</option>
            <option value="Indisponível">Indisponível</option>
          </select>
          <label class="label1 mt-1" for="floatingSelect">Disponibilidade</label>
        </div>
      </div>
      <div class="d-flex flex-row">
      <div class="input-group">
          <span class="input-group-text">Descrição</span>
          <textarea id="description" class="form-control" placeholder=""
            name="description" value="{{ old('description') }}"></textarea>
          @error('description')
            <span class="invalid-feedback" role="alert" name="description">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="d-flex align-self-end">
          <button type="submit" class="il2 btn btn-success btn-lg">
            {{ __('Criar Cardápio') }}
          </button>
        </div>
      </div>
    </div>
</form>
@endsection
