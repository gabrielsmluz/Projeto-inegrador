@extends('layouts.layout')
@section('background','background_login')
@section('title','Login')
@section('main_content')
<main class="d-flex my-auto form-signin">
  <div style="width: 500px;" class="d-flex mx-auto justify-content-center smcontainer border border-3 bg-secondary bg-opacity-50 rounded mt-5 p-3">
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <h3 class="d-flex text-light mx-auto mb-3 fw-normal">Login de Funcionários</h3>
      <div class="d-flex flex-column gap-2">
      <div class="form-floating">
        <input id="email" type="floatingInput" class="form-control" name="email"
          value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label class="text-black " for="floatingInput">Endereço de Email</label>
        @error('email')
          <span class="invalid-feedback" role="alert">
            {{ $message }}
          </span>
        @enderror
      </div>
      <div class="form-floating">
        <input id="floatingPassword" type="password"
          class="form-control @error('password') is-invalid @enderror" name="password" required
          autocomplete="current-password">
        <label for="floatingPassword" class="text-black">Senha</label>
        @error('password')
          <span class="invalid-feedback" role="alert">
            {{ $message }}
          </span>
        @enderror
      </div>
      </div>
      <div class="form-check d-flex justify-content-start">
        <input class="form-check-input" type="checkbox" name="remember" id="remember"
          {{ old('remember') ? 'checked' : '' }}>
        <div class="d-flex s-1">
          <label class="form-check-label" for="remember">
            Lembre-se
          </label>
        </div>
      </div>
      <div class="d-flex gap-1 flex-row justify-content-between">
        <a class="w-1 btn btn-lg btn-warning" href="{{ route('register') }}"
          role="button">Cadastre-se</a>
        @if(Route::has('password.request'))
          <a class="text-dark border mb-3 bg-light btn btn-link"
            href="{{ route('password.request') }}">
            {{ __('Esqueceu sua senha?') }}
          </a>
        @endif
        <button class="w-1 btn btn-lg btn-success" type="submit">Entrar</button>
      </div>
    </form>
    </div>
</main>
@endsection
