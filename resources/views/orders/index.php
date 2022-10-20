@extends('layouts.layout')
@section('background','background_users')
@section('title','Ver Pedidos')
@section('main_content')
  <div class="d-flex flex-column p-2">
    <div class="d-flex justify-content-center">
      <div class="bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
          <h2 class="">Vizualização de Pedidos</h2>
      </div>
    </div>
    <div class="d-flex p-3"></div>

      <div class="d-flex flex-column container-md">
        <div class="d-flex align-items-center p-3">
            <div class="">
              <p class="">Pedidos realizados no dia:</p>
            </div>
          <div class="">
            <input type="date" name="" value="">
            <a href="">
              <img src="calendar.png" alt="" height="30" width="30">
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">Número</th>
                <th scope="col">Mesa</th>
                <th scope="col">Status</th>
                <th scope="col">Horário</th>
                <th scope="col">Itens</th>
                <th scope="col">Vizualizar/Editar</th>
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
      </div>
    </div>
@endsection
