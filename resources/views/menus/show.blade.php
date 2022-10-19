@extends('layouts.layout')
@section('background','background_menus')
@section('title','Edição do Cardápio')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="header h2 pt-2 p-1">
    <h2 class="">Vizualização de Cardápios</h2>
  </div>
</div>
<div class="">
  <div class="d-flex justify-content-center">
    <div class="table lgcontainer p1 p-3">
      <div class="d-flex flex-row justify-content-between">
        <div class="d-flex align-items-center">
          <p class="text-start ">
            ID : {{ $menu->id }} <br>
            Nome : {{ $menu->name }} <br>
            Criado em : {{ $menu->created_at }} <br>
            Atuazlizado em : {{ $menu->updated_at }} <br>
            Atividade : {{ $menu->is_active }}<br>
            Descrição : {{ $menu->description }}<br>
          </p>
        </div>
        <div class="d-flex flex-column p-1">
          <div class="d-flex form-floating">
            <select id="floatingSelect" class="il2 form-select form-select-lg bg-white" name="is_active"
              value="{{ $menu->is_active }}">
              <option selected value="Ativo">Ativo</option>
              <option value="Inativo">Inativo</option>
            </select>
            <label class="label1 text-dark mt-1" for="floatingSelect">Atividade</label>
          </div>
          <hr>
          <form action="{{ route('menu.product.store', $menu->id) }}" method="post">
            @csrf
            <div class="d-flex flex-row">
              <div class="d-flex">
                <label for="inputAddProdutos" class="form-label">Adicionar Produtos:</label>
                <select name="product_id" id="inputAddProdutos" class="form-select">
                  <option selected>Selecionar Produtos</option>
                  @foreach($addableProducts as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                  @endforeach
                </select>
                <div class="d-flex p-1">
                  <button type="submit" class="btn btn-success">Adicionar</button>
                </div>
              </div>
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
            <td>{{ $product->description }}</td>
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
                  <i class="bi bi-pencil color='success'"></i>
                </a>
              </button>
              <button class="rounded bg-danger border-danger" type="button" name="buttondelte"
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="bi bi-trash3"></i>
              </button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title p2" id="staticBackdropLabel">Tem certeza que
                        deseja deletar esse item do cardápio?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-evenly">
                      <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                      <form method="POST"
                        action="{{ route('menu.product.destroy', [$menu->id, $product->id])}}">
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
  <div class="d-flex justify-content-evenly p-3">
    <button type="submit" class=" btn btn-primary btn-lg">Salvar Alterações</button>
  </div>
</div>
</div>
@endsection
