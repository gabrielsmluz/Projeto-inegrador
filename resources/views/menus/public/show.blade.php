@extends('layouts.layout')
@section('background','background_menus')
@section('title','Cardápio Publico')
@section('main_content')
<div class="d-flex justify-content-center gap-3">
@foreach($menu->products as $product)
<div class="card" style="width: 18rem;">
  <img src="{{ asset('storage/'.$product->image_path) }}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{ $product->name }}</h5>
    <p class="card-text">{{ $product->description }}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Preço - R$: {{ $product->price_cents }},00</li>
    <li class="list-group-item">{{ $product->establishmnet_id }}</li>
    <li class="list-group-item">ID do Produto: {{ $product->id }}</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
@endforeach
</div>











@endsection