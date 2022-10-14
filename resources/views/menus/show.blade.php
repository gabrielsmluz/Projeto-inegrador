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
          <select id="floatingSelect" class="il2 form-select form-select-lg bg-white"
            name="is_active" value="{{ $menu->is_active }}">
            <option selected value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
          </select>
          <label class="label1 text-dark mt-1" for="floatingSelect">Atividade</label>
        </div>
          <hr>
          <div class="d-flex flex-row">
            <div class="d-flex">
              <label for="inputAddProdutos" class="form-label">Adicionar Produtos:</label>
              <select id="inputAddProdutos" class="form-select">
                <option selected>Selecionar Produtos</option>              
                <option>...</option>
              </select>
              <div class="d-flex p-1">
                <button type="button" class="btn btn-success">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center table-responsive">
    <table class="table p1 table-hover lgcontainer">
      <thead>
        <tr>
          <th scope="col">Título/Produto</th>
          <th scope="col">Descrição</th>
          <th scope="col">Preço</th>
          <th scope="col">Disponibilidade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>
            <label class="d-flex toggle justify-content-center m-1" for="myToggle">
              <input class="toggle__input" name="" type="checkbox" id="myToggle">
              <div class="toggle__fill"></div>
            </label>
          </td>
          <td>
            <button type="button" class="btn btn-success">Success</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry the Bird</td>
          <td>@twitter</td>
          <td>sabonete</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-evenly p-3">
    <button type="submit" class=" btn btn-primary btn-lg">Salvar Alterações</button>
  </div>
</div>
</div>
@endsection
