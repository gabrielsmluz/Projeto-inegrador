@extends('layouts.layout')
@section('background','background_products')
@section('title','Edição de Produtos')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="d-inline-flex header h2 p-1">
    <h2>Edição de Produtos</h2>
  </div class="">
</div>
<form method="POST" action="{{ route('product.update', $product->id) }}"
  enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="d-flex flex-column smcontainer container header p-3 mt-3">
    <div class="d-flex flex-column gap-1">
      <div class="d-flex flex-row gap-3 justify-content-center">
        <div class="flex-column mt-3 form-floating flex-fill">
          <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}"
            placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Nome</label>
          @error('name')
            <span class="invalid-feedback" role="alert" name="name">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="flex-column mt-3 form-floating il2">
          <input id="price_cents" type="text" class="form-control" name="price_cents"
            value="{{ $product->price_cents }}" placeholder="DO NOT ERASE">
          <label for="inputNome" class=" label1">Preço</label>
          @error('price_cents')
            <span class="invalid-feedback" role="alert" name="price_cents">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
      </div>
      <div class="d-flex flex-row gap-3 justify-content-center">
        <div class="input-group mt-3">
          <span class="input-group-text">Descrição</span>
          <textarea id="description" class="form-control" placeholder="" value="{{ $product->description }}"
            name="description"></textarea>
          @error('description')
            <span class="invalid-feedback" role="alert" name="description">
              {{ "Esse campo deve ser preenchido" }}
            </span>
          @enderror
        </div>
        <div class="d-flex form-floating align-self-center my-3">
          <select id="floatingSelect" class="il1 mt-3 form-select form-select-lg bg-white" name="is_available"
            value="{{ $product->is_available }}">
            <option selected value="1">Disponível</option>
            <option value="0">Indisponível</option>
          </select>
          <label class="label1 mt-3" for="floatingSelect">Disponibilidade</label>
        </div>
      </div>
      <div class="d-flex mt-1 flex-row">
        <div class="input-group mt-2 me-2 mb-2 ">
          <input type="file" class="form-control" id="inputGroupFile02" name="image"
            value="{{ $product->image }}">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="d-flex my-2 ms-2 ">
          <button type="submit" class="il1 btn btn-lg btn-success">
            {{ __('Editar Produto') }}
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
