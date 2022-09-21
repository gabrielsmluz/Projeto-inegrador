@extends('layouts.layout')
@section('title','Produtos')
@section('main_content')
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Lista de Produtos</h2>
    </div class="">
  </div>
  <div class="d-flex flex-column container-md">
  <div class="d-flex justify-content-end p-3">
    <a class="" href="{{ route('product.create') }}">
      <button type="button" class="btn btn-primary">Adicionar Novo Funcionário</button>
    </a>
  </div>
  <div class="d-flex flex-column container-lg">
    <div class="d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Disponibilidade</th>
            <th scope="col">Estabelecimento</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <th scope="row">{{ $product->id}}</th>
            <td>{{ $product->name}}</td>
            <td>{{ $product->description}}</td>
            <td>{{ $product->price_cents}},***</td>
            <td>{{ $product->is_available}}</td>
            <td>{{ $product->establishment_id}}</td>
            <td>
              <button class="rounded border-primary" type="button" name="showbutton">
                <a href="{{route('product.show', $product->id)}}">
                  <i class="bi bi-search"></i>
                </a>
              </button>
              <button class="rounded border-success" type="button" name="editbutton">
                <a href="{{route('product.edit', $product->id)}}">
                  <i class="bi bi-pencil color='success'"></i>
                </a>
              </button>
              <button class="rounded bg-danger border-danger" type="button" name="buttondelte" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="bi bi-trash3"></i>
              </button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Tem certeza que deseja deletar esse usuário?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-evenly">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <form method="POST" action="{{route('product.destroy', $product->id)}}">
                        @csrf
                        @method('delete')
                      <button type="submit" class="btn btn-danger">Sim, Remover</button>
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
  </div>
</div>
@endsection
