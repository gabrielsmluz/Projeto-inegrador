@extends('layouts.layout')
@section('background','background_products')
@section('title','Criação Produtos')
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
          <input id="name" type="text" class="form-control" name="name"
            value="{{ old('name') }}" placeholder="DO NOT ERASE">
          @error('name')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label for="inputNome" class=" label1">Nome</label>
        </div>
        <div class="flex-column mt-3 form-floating il2">
          <input id="price_cents" type="text" class=" form-control" name="price_cents"
            value="{{ old('price_cents') }}" placeholder="DO NOT ERASE">
          @error('price_cents')
            <span class="text-danger">
              {{ $message }}
            </span>
          @enderror
          <label for="" class="label1">Preço</label>
        </div>
      </div>
      <div class="d-flex flex-row gap-3 justify-content-center">
          <div class="input-group mt-3">
            <span class="input-group-text">Descrição</span>
            <textarea id="description" class="form-control" placeholder="" name="description"
              value="">{{ old('description') }}</textarea>
          </div>
          <div>@error('description')
            <span class="text-danger">
              {{ $message }}
            </span>
            @enderror</div>
          <div class="d-flex form-floating align-self-center my-3">
            <select id="floatingSelect" class="il1 mt-3 form-select form-select-lg bg-white"
              name="is_available" value="{{ old('is_available') }}">
              <option selected value="Disponível">Disponível</option>
              <option value="Indisponível">Indisponível</option>
            </select>
            <label class="label1 mt-3" for="floatingSelect">Disponibilidade</label>
          </div>
        </div>
        <div class="d-flex mt-1 flex-row">
          <div class="input-group mt-2 me-2 mb-2 ">
            <input type="file" class="form-control" id="inputGroupFile02" name="image"
              value="{{ old('image') }}">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
          <div class="d-flex my-2 ms-2 ">
            <button type="submit" class="il1 btn btn-lg btn-success">
              {{ __('Criar Produto') }}
            </button>
          </div>
        </div>
      </div>
    </div>
</form>
@endsection
