@extends('layouts.layout')
@section('background','background_products')
@section('title','Produtos')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="d-inline-flex header h2 p-1">
    <h2>Criação de Produtos</h2>
  </div class="">
</div>
<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="d-flex flex-column smcontainer container header p-3 mt-3">
    <div class="d-flex flex-column gap-1">
      <div class="d-flex flex-row gap-3 justify-content-center">
        <div class="flex-column mt-3 form-floating flex-fill">
          <input id="name" type="text" class="form-control form-control-sm" name="name"
            value="{{ old('name') }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Nome</label>
          @error('name')
            <span class="invalid-feedback" role="alert" name="name">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating flex-fill">
          <input id="price_cents" type="text" class="form-control form-control-sm" name="price_cents"
            value="{{ old('price_cents') }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Preço</label>
          @error('price_cents')
            <span class="invalid-feedback" role="alert" name="price_cents">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
      </div>
      <div class="d-flex flex-row gap-3 justify-content-center">
        <div class="flex-column mt-3 form-floating flex-fill">
          <textarea id="description" class="form-control" placeholder="DO NOT ERASE"
            name="description"></textarea>
          <label class="label1" for="floatingTextarea">Descrição</label>
          @error('description')
            <span class="invalid-feedback" role="alert" name="description">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="form-floating align-self-center my-3">
          <select id="floatingSelect" class="form-select form-select-lg bg-white  fw-bold flex-fill"
            name="is_available">
            <option selected>Clique para selecionar</option>
            <option value="1">Disnonível</option>
            <option value="0">Indisponível</option>
          </select>
          <label class="label1" for="floatingSelect">Disponibilidade</label>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="input-group mt-2 mb-2 ">
          <input type="file" class="form-control" id="inputGroupFile02" name="image">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="d-flex w-50 my-2 ms-2 ">
          <button type="submit" class="mx-2 btn btn-lg btn-success">
            {{ __('Criar Produto') }}
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
