<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <style>
    .toggle {
      --width: 50px;
      --height: calc(var(--width) / 2);
      --border-radius: calc(var(--height) / 2);

      display: inline-block;
      cursor: pointer;
    }

    .toggle__input {
      display: none;
    }

    .toggle__fill {
      position: relative;
      width: var(--width);
      height: var(--height);
      border-radius: var(--border-radius);
      background: #dddddd;
      transition: background 0.2s;
    }

    .toggle__input:checked~.toggle__fill {
      background: #009578;
    }

    .toggle__fill::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: var(--height);
      width: var(--height);
      background: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
      border-radius: var(--border-radius);
      transition: transform 0.2s;
    }

    .toggle__input:checked~.toggle__fill::after {
      transform: translateX(var(--height));
    }
    </style>
    <title>@yield('title')</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
  </head>



  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid d-flex">
        <div class=justify-content-start style="width: 100%;display: inherit;">
        <a class="navbar-brand" href="teste_background">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a class="d-flex rounded nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="d-flex rounded nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                      </li>
                    </ul>
                  @endif
              @else
              <ul class="navbar-nav me-auto">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="cardapio">Cardápios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="produtos">Produtos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="verpedidos">Ver Pedidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('user.index')}}">Funcionários</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="cadastro">Dados da Empresa</a>
                </li>
              </ul>
                <li class="nav-item dropdown">
                </div>
                  </div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                    @csrf
                    <button class="btn btn-danger" type="submit" name="logout">Logout</button>
                  </form>
                </li>
              @endguest
    </div>
    </nav>
    <div class="d-flex p-3"></div>
    @yield('main_content')
  </body>
</html>
