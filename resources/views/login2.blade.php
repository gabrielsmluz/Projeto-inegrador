@extends('layouts.layout')
@section('title','Login')
@section('main_content')
  <main class="form-signin w-25 d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
    <div class="d-flex justify-content-center">
      <form class="p-3">
        <h1 class="h3 mb-3 fw-normal">Login do Gerente Responsável</h1>

        <div class="form-floating">
          <input type="text" class="form-control" id="InputLogin" placeholder="seu.login.123">
          <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="sua.senha.321">
          <label for="floatingPassword">Senha</label>
        </div>

        <div class="checkbox d-flex mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembre-se
          </label>
        </div>
        <div class="d-flex flex-row justify-content-between">
          <a class="w-1 btn btn-lg btn-primary" href="cadastro.html" role="button">Cadastrar-se</a>
          <button class="w-1 btn btn-lg btn-success" type="submit">Entrar</button>
        </div>
      </form>
  </main>
@endsection
