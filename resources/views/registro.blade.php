@extends('layouts.layout')

@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class=" card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class=" card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="d-flex flex-row">
                        <div class="d-flex flex-row">
                            <label for="name" class="">{{ __('Nome') }}</label>
                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <label for="email" class="">{{ __('Endereço de Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                      <br>
                      <div class="d-flex flex-row">
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme a Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                      </div>
                        <div class="d-flex justify-content-center align-items-center">
                          <div class="d-flex flex-column justify-content-end gap-3 p-1">
                          <div class="">
                            <label for="">CPF</label>
                            <input type="text" name="cpf" value="">
                          </div>
                          <div class="">
                            <label for="">Telefone</label>
                            <input type="text" name="phone" value="">
                          </div>
                        </div>
                        <div class="d-flex flex-column gap-1 p-1 border rounded border-primary">
                        <label for="email" class="">Função</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Gerente
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                            Funcionário
                          </label>
                        </div>
                        </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
