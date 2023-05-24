<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{--import links --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    @vite(['resources/css/style.css', 'resources/js/app.js']) 
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav d-flex justify-content-center align-items-center me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/"><i class="bi bi-house-fill fs-3 text-info"></i></a>
                          </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('department.create')}}">Department</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('subjects.create')}}">Subject</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
{{-- ------------Contant Pages----------- --}}
        <main class="py-4">
            <div class="container">
                <div class="row">
                  <div class="col-4">
                    @yield('create_department')
                    @yield('edit_department')
                  </div>
                  <div class="col-2">
                  </div>
                  <div class="col-6">
                    @yield('description department')
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-3">
                  </div>
                  <div class="col-6">
                    @yield('show_department')
                      @yield('authentication')
                  </div>
                  <div class="col-3">
                  </div>
                </div>
              </div>

              <div class="container">
                <div class="row">
                  <div class="col-6">
                    @yield('content')
                  </div>
                  <div class="col-2">
                  </div>
                  <div class="col-4">
                    @yield('home-discript')
                  </div>
                </div>
              </div>
{{--------Footer Section------}}
              <div class="footer fixed-bottom w-100">
                  <footer class="text-white text-center text-lg-start bg-info">
                  <div class="text-center p-1">
                    © 2023 Copyright: <span class="fw-bold">TeamWork</span>
                  </div>
                </footer>
                
              </div>
        </main>
    </div>
</body>
</html>
