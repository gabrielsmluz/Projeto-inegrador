@extends('layouts.layout')
@section('title','Produtos')
@section('main_content')
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Edição de Produtos</h2>
    </div class="">
    <div class="d-flex p-3"></div>
  </div>
<form method="POST" action="{{ route('product.update', $product->id)}}">
  @csrf
  @method('PUT')
<div class="d-flex flex-column container bg-secondary bg-opacity-10 rounded border border-success border-3 p-3 mt-3">
  <div class="d-flex flex-column">
    <div class="d-flex flex-row">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome</span>
        <input type="text" class="form-control" placeholder="Brigadeiro" aria-label="nome1" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Preço, R$:</span>
        <input type="text" class="form-control" placeholder="123,456" aria-label="preco1" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="d-flex flex-row">
      <div class="d-flex w-75 input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Descrição</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>
      <div class="d-flex w-25 justify-content-center">
        <div class="d-flex align-self-center flex-row">
          <p>
            Disponível:
          </p>
          <label class="d-flex toggle justify-content-center m-1" for="myToggle">
            <input class="toggle__input" name="" type="checkbox" id="myToggle">
            <div class="toggle__fill"></div>
          </label>
        </div>
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
        {{ __('Alterar Dados') }}
      </button>
    </div>
  </div>
</div>
</form="">

@endsection
