<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="@yield('style')">
  <meta charset="utf-8">
  <title>@yield('title')</title>
  @vite(['resources/js/app.js'])
</head>

<body class="@yield('background')">
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid d-flex">
      <div class=justify-content-start style="width: 100%;display: inherit;">
        <a class="navbar-brand" href="">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Authentication Links -->
          @guest
            @if(Route::has('login'))
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="d-flex rounded nav-link"
                    href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if(Route::has('register'))
              <li class="nav-item">
                <a class="d-flex rounded nav-link"
                  href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
              </li>
              </ul>
            @endif
          @else
            <ul class="navbar-nav me-auto">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page"
                    href="{{ route('menu.index') }}">Cardápios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active"
                    href="{{ route('product.index') }}">Produtos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="">Ver Pedidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active"
                    href="{{ route('user.index') }}">Funcionários</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active"
                    href="{{ route('establishment.index') }}">Dados da Empresa</a>
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
