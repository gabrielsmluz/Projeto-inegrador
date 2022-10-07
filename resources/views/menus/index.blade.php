@extends('layouts.layout')
@section('background','background_menus')
@section('title','Cardapio')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="header h2 pt-2 p-1">
    <h2 class="">Gerenciamento de Cardápios</h2>
  </div>
</div>
<div class="container">
<div class="d-flex justify-content-end p-3">
      <a class="" href="{{ route('menu.create') }}">
        <button type="button" class="btn btn-primary">Adicionar Novo Produto</button>
      </a>
    </div>
  <div class="table-responsive">
    <table class="table table-bordered table-dark table-hover mt-3">
      <thead>
        <tr>
          <th scope="col">Título</th>
          <th scope="col">Descrição</th>
          <th scope="col">Ativo</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($menus as $menu)
          <tr>
            <th scope="row">{{ $menu->id }}</th>
            <td>{{ $menu->name }}</td>
            <td>{{ $menu->description }}</td>
            <td>{{ $menu->is_available }},***</td>
            <td>
              <button class="rounded border-primary" type="button" name="showbutton">
                <a href="{{ route('menu.show', $menu->id) }}">
                  <i class="bi bi-search"></i>
                </a>
              </button>
              <button class="rounded border-success" type="button" name="editbutton">
                <a href="{{ route('menu.edit', $menu->id) }}">
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
                      <h5 class="modal-title" id="staticBackdropLabel">Tem certeza que
                        deseja deletar esse usuário?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-evenly">
                      <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                      <form method="POST"
                        action="{{ route('menu.destroy', $menu->id) }}">
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
</div>
</div>
@endsection
