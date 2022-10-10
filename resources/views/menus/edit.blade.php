@extends('layouts.layout')
@section('background','background_menus')
@section('title','Criação de Cardápio')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="d-inline-flex mb-4 header h2 p-1">
    <h2>Criação de Cardápio</h2>
  </div>
</div>
<form class="d-flex mt-5" method="POST" action="{{ route('menu.update', $menu->id) }}">
  @csrf
  @method('PUT')
  <div class="d-flex mt-3 table smcontainer justify-content-center container-lg">
    <div class="d-flex flex-column">
      <div class="d-flex me-auto ms-auto flex-row">
        <div class="flex-column mt-3 form-floating">
          <input id="name" type="text" class="form-control form-control-sm" name="name"
            value="{{ $menu->name }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Nome do Cardápio</label>
          @error('name')
            <span class="invalid-feedback" role="alert" name="name">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating">
          <input id="description" type="text" class="form-control form-control-sm" name="description"
            value="{{ $menu->description }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Descrição</label>
          @error('description')
            <span class="invalid-feedback" role="alert" name="description">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
      </div>
      <div class="d-flex ms-2 flex-row">
        <select class="form-select-lg bg-white fs-6 my-4 fw-bold" name="is_active"
          value="{{ $menu->is_active }}">
          <option value="0">Selecione uma das opções</option>
          <option value="1">Ativo</option>
          <option value="0">Inativo</option>
        </select>
        <div class="d-flex ms-4 my-2 p-3">
          <button type="submit" class=" btn btn-success btn-lg">
            {{ __('Editar Cardápio') }}
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
@endsection
