@extends('layouts.layout')
@section('background','background_menus')
@section('title','Cardápio Publico')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="header h2 pt-2 p-1">
    <h2 class="">{{ $menu->name }}</h2>
  </div>
</div>
<div class="grid-container mt-5">
  @foreach($menu->products as $product)
    <div class="grid-item">
      <div style="height:px;" class="card">
        <img src="{{ asset('storage/'.$product->image_path) }}" class="card-img-top"
          alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $product->name }}</h5>
          <p class="card-text">{{ $product->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Preço - R$: {{ $product->price_cents }},00</li>
          <li class="list-group-item">ID do Produto: {{ $product->id }}</li>
        </ul>
      </div>
    </div>
  @endforeach
</div>












@endsection
