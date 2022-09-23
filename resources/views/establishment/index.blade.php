@extends('layouts.layout')
@section('title','Cadastro')
@section('main_content')
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Cadastro de Empresa</h2>
    </div>
  </div>
  <div class="d-flex p-3"></div>
  <form method="POST" action="{{ route('establishment.store') }}">
      @csrf
    <div class="d-flex justify-content-center t-4">
      <div class="bg-secondary bg-opacity-10 rounded border border-success border-5 container-lg">

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputCNPJ" class="form-label">CNPJ</label>
            <input name="cnpj" type="text" class="form-control" id="inputCNPJ" placeholder="12.345.678/0001-23" >
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputRazãoSocial" class="form-label">Razão Social</label>
            <input name="company_name" type="text" class="form-control" id="inputRazãoSocial" placeholder="Leitão da Luz Ltda." >
          </div>
        </div>

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputNomeFantasia" class="form-label">Nome Fantasia</label>
            <input name="trading_name" type="text" class="form-control" id="inputNomeFantasia" placeholder="Brigadeiria Leitão da Luz" >
          </div>
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputTelefonedoEstabelecimento" class="form-label">Telefone do Estabelecimento</label>
            <input name="phone" type="text" class="form-control" id="inputTelefonedoEstabelecimento" placeholder="42998032047" >

          </div>
        </div>

        <div class="d-flex m-1">
          <div class="d-flex flex-column p-1 w-50">
            <label for="inputEndereço" class="form-label">Endereço *</label>
            <input type="text" class="form-control" id="inputEndereço" placeholder="Rua Saldanha Marinho" name="address">
          </div>
        </div>

        <div class="d-flex justify-content-end p-3">
          <button type="submit" class=" btn btn-success btn-lg">
            {{ __('Registrar') }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endsection
