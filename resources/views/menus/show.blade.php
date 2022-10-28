@extends('layouts.layout')
@section('background','background_menus')
@section('title','Edição do Cardápio')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="header h2 pt-2 p-1">
    <h2 class="">Vizualização de Cardápios</h2>
  </div>
</div>
<div class="table lgcontainer mx-auto p1 py-3">
  <div class="d-flex flex-row justify-content-evenly">
    <div class="d-flex flex-column border border-3 border-secondary rounded pvc">
      <div class="d-flex flex-row">
        <p class=" text-decoration-underline">ID :</p>
        <p>{{ $menu->id }} </p>
      </div>
      <div class="d-flex flex-row">
        <p class="text-decoration-underline">Nome:</p>
        <p>{{ $menu->name }} </p>
      </div>
      <div class="d-flex flex-row">
        <p class="text-decoration-underline">Criado em:</p>
        <p>{{ $menu->created_at }} </p>
      </div>
      <div class="d-flex flex-row">
        <p class="text-decoration-underline">Atuazlizado em:</p>
        <p>{{ $menu->updated_at }} </p>
      </div>
      <div class="d-flex flex-row">
        <p class="text-decoration-underline">Atividade:</p>
        <p>{{ $menu->is_active }}</p>
      </div>
      <div class="d-flex flex-row">
        <p class="text-decoration-underline">Descrição:</p>
        <p class="text-break">{{ $menu->description }}asdasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
      </div>
    </div>
    <div class="d-flex flex-column justify-content-center border border-3 border-secondary rounded pvc px-2">
      <div class="mx-auto">
        <h5>Link do Cardpápio Público:</h5>
        <a href="{{ route('menu.public.show', $menu->id) }}"
          class="">{{ route('menu.public.show', $menu->id) }}</a>
      </div>
      <hr>
      <div>
        <img width="150px" class="d-flex mx-auto"
          src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl={{ urlencode(route('menu.public.show', $menu->id)) }}">
        <h5 class="text-center mt-3">Use um leitor de QR Code <br> para acessar o cardápio</h5>
      </div>
    </div>
    <div style="max-width: 240px;" class="d-flex flex-column border border-3 border-secondary rounded pvc px-2">
      <form class="d-flex justify-content-center" method=""
        action="{{ route('menu.edit', $menu->id) }}">
        @csrf
        <button name="editcardbtn" type="submit" class="btn btn-warning btn-lg bg-warning m-1">Edição de
          Cardpápio
          <i class="bi bi-pencil color='success'"></i>
        </button>
      </form>
      <hr class="d-flex hr mb-1 mt-4">
      <form class="d-flex flex-row" method="POST"
        action="{{ route('menu.update', $menu->id) }}">
        @csrf
        @method('PUT')
        <div style="max-width: 135px;" class="d-flex form-floating me-2">
          <select id="floatingSelect" class="il2 form-select form-select-lg bg-white" name="is_active"
            value="{{ $menu->is_active }}">
            <option value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
          </select>
          <label class="label1 text-dark mt-1" for="floatingSelect">Atividade</label>
        </div>
        <button style="min-height:58px; min-width: 58px;" class="btn btn-success" type="submit"
          name="editbutton">
          <i class="bi bi-pencil"></i>
        </button>
      </form>
      <hr class="d-flex hr mb-1 mt-3">
      <div class="d-flex">
        <form action="{{ route('menu.product.store', $menu->id) }}"
          class="d-flex flex-column gap-2" method="post">
          @csrf
          <div class="d-flex form-floating">
            <select name="product_id" id="inputAddProdutos" class="form-select">
              <option selected>Selecionar Produtos</option>
              @foreach($addableProducts as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
              @endforeach
            </select>
            <label for="inputAddProdutos" class="label1 text-dark">Adicionar Produtos:</label>
          </div>
          <div class="d-flex mb-5 mt-1 mx-auto ">
            <button type="submit" class="btn btn-lg btn-primary">Adicionar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="d-flex justify-content-center table-responsive">
  <table class="table table-bordered table-dark table-hover lgcontainer">
    <thead>
      <tr>
        <th scope="col">Título</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Disponibilidade</th>
        <th scope="col">Estabelecimento</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($menu->products as $product)
          <td><a target="_blank"
              href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
          </td>
          <td class="text-break">{{ $product->description }}</td>
          <td>R$:{{ $product->price_cents }},00</td>
          <td>{{ $product->is_available }}</td>
          <td>{{ $product->establishment_id }}</td>
          <td class="d-flex justify-content-evenly">
            <button class="rounded border-primary" type="button" name="showbutton">
              <a href="{{ route('product.show', $product->id) }}">
                <i class="bi bi-search"></i>
              </a>
            </button>
            <button class="rounded border-success" type="button" name="editbutton">
              <a href="{{ route('product.edit', $product->id) }}">
                <i class="bi bi-pencil text-success"></i>
              </a>
            </button>
            <button class="rounded bg-danger border-danger" type="button" name="buttondelte"
              data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="bi bi-trash3"></i>
            </button>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="text-center modal-title p2" id="staticBackdropLabel">Tem certeza que
                      deseja deletar esse item do cardápio?</h5>
                  </div>
                  <div class="modal-body d-flex justify-content-evenly">
                    <button type="button" class="btn btn-secondary"
                      data-bs-dismiss="modal">Cancelar</button>
                    <form method="POST"
                      action="{{ route('menu.product.destroy', [$menu->id, $product->id]) }}">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Sim,
                        Remover</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<form class="d-flex justify-content-center" method="" action="{{ route('menu.index') }}">
  @csrf
  <div class="d-flex justify-content-evenly mb-5">
    <button type="submit" class=" btn btn-primary btn-lg">Retornar</button>
  </div>
</form>
@endsection
