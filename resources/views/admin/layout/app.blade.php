<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/5e6e7e9c0f.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
</head>
<body>

<nav id="admin_navbar" class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin/home') }}">
                    Dashboard
                </a>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <div id="logoutDropdown" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                    </ul>
            </div>
        </nav>

<div class="row content">

<div class="col-md-3 col-lg-2">
<nav class="sidebar">

    <ul class="navbar-nav mr-auto flex-sm-column">
    <li class="nav-item">
        <a class="nav-link" href="/admin/home"><i class="fas fa-home"></i>Dashboard</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin/users"><i class="fas fa-users"></i>Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/categories"><i class="fas fa-project-diagram"></i>Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/lessons"><i class="fas fa-book-open"></i>Lessons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/banners"><i class="fas fa-ad"></i>Banners</a>
      </li>
    </ul>
</nav>         

  </div>

    <div class="col-md-9 col-lg-10">
      @yield('content')
      </div>
</div>


</body>
</html>
