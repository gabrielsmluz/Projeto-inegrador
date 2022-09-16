@extends('layouts.layout')
@section('title','Funcionários')
@section('main_content')
<div class="d-flex justify-content-center">
  <div class="bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2 class="">Vizualização de Funcionários</h2>
  </div>
</div>
  <div class="d-flex flex-column container-md">
  <div class="d-flex justify-content-end p-3">
    <a class="" href="{{ route('user.create') }}">
      <button type="button" class="btn btn-primary">Adicionar Novo Funcionário</button>
    </a>

  </div>
  <div class="d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Endereço</th>
          <th scope="col">Telefone</th>
          <th scope="col">Email</th>
          <th scope="col">Tipo</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <th scope="row">{{ $user->id}}</th>
          <td>{{ $user->name}}</td>
          <td>{{ $user->cpf}}</td>
          <td>{{ $user->adress}}</td>
          <td>{{ $user->phone}}</td>
          <td>{{ $user->email}}</td>
          <td>{{ $user->type == 'manager'?'Gerente':'Funcionário'}}</td>
          <td>
            <button class="rounded border-primary" type="button" name="showbutton">
              <a href="{{route('user.show', $user->id)}}">
                <i class="bi bi-search"></i>
              </a>
            </button>
            <button class="rounded border-success" type="button" name="editbutton">
              <a href="{{route('user.edit', $user->id)}}">
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
                    <form method="POST" action="{{route('user.destroy', $user->id)}}">
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
@endsection
