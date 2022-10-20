@extends('layouts.layout')
@section('background','background_menus')
@section('title','Edição de Cardápio')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="d-inline-flex mb-4 header h2 p-1">
    <h2>Edição de Cardápio</h2>
  </div>
</div>
<form class="d-flex mt-5" method="POST" action="{{ route('menu.update', $menu->id) }}">
  @csrf
  @method('PUT')
  <div class="d-flex mt-3 p-3 table smcontainer justify-content-center container-lg">
    <div class="d-flex flex-column">
      <div class="d-flex flex-row">
        <div class="flex-column form-floating flex-fill">
          <input id="name" type="text" class="form-control" name="name"
          value="{{ $menu->name }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Nome do Cardápio</label>
          @error('name')
            <span class="invalid-feedback" role="alert" name="name">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="d-flex form-floating">
          <select id="floatingSelect" class="il2 form-select form-select-lg bg-white"
            name="is_active" value="{{ $menu->is_active }}">
            <option selected value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
          </select>
          <label class="label1 mt-1" for="floatingSelect">Atividade</label>
        </div>
      </div>
      <div class="d-flex flex-row">
      <div class="input-group">
          <span class="input-group-text">Descrição</span>
          <textarea id="description" class="form-control" placeholder=""
            name="description" value="">{{ $menu->description }}</textarea>
          @error('description')
            <span class="invalid-feedback" role="alert" name="description">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="d-flex align-self-end">
          <button type="submit" class="il2 btn btn-success btn-lg">
            {{ __('Editar Cardápio') }}
          </button>
        </div>
      </div>
    </div>
</form>
@endsection
