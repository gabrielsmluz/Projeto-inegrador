@extends('layouts.layout')
@section('title','Produtos')
@section('main_content')
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Criação de Produtos</h2>
    </div class="">
    <div class="d-flex p-3"></div>
  </div>
<form method="POST" action="{{ route('product.store')}}">
  @csrf
<div class="d-flex flex-column container bg-secondary bg-opacity-10 rounded border border-success border-3 p-3 mt-3">
  <div class="d-flex flex-column">
    <div class="d-flex flex-row">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome</span>
        <input name="name" type="text" class="form-control" placeholder="Brigadeiro" aria-label="nome1" aria-describedby="basic-addon1">
      </div>
      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Preço, R$:</span>
        <input name="price_cents" type="text" class="form-control" placeholder="123,456" aria-label="preco1" aria-describedby="basic-addon1">
        @error('price_cents')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>
    <div class="d-flex flex-row">
      <div class="d-flex w-75 input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Descrição</span>
        <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>
    <div class="d-flex flex-row">
      <div class="input-group">
        <input type="file" class="form-control" id="inputGroupFile02">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
      </div>
      <div class="d-flex w-50 border rounded-border m-3">
        div para adicionar imagens(temp)
      </div>
      <button type="submit" class=" btn btn-success btn">
        {{ __('Finalizar') }}
      </button>
    </div>
  </div>
</div>
</form>

@error('price_cents')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

@endsection
