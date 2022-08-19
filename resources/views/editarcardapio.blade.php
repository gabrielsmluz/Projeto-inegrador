@extends('layouts.layout')
@section('title','Editar Cardápio')
@section('main_content')
  <div class="d-flex flex-column p-2">
    <div class="d-flex justify-content-center">
      <div class="bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
          <h2 class="">Vizualização de Cardápios</h2>
      </div>
    </div>
    <div class="">
      <div class="d-flex justify-content-center">
        <div class="border container-sm m-2">
          <div class="d-flex flex-row justify-content-evenly">
            <div class="d-flex align-items-end">
              <p class="text-start">
                Nome: cardápio principal <br>
                Criado em: 14/06/2022 <br>
                Cardápio ativo? Sim <br>
              </p>
            </div>
            <div class="d-flex flex-column p-1">
              <div class="d-flex flex-row">
                Ativar/Desativar
                <label class="d-flex toggle justify-content-center m-1" for="myToggle">
                  <input class="toggle__input" name="" type="checkbox" id="myToggle">
                  <div class="toggle__fill"></div>
                </label>
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

      <div class="d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
        <table class="table table-bordered table-hover">
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
