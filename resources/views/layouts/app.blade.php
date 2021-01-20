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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/"><img src="/images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="#">Академии</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Вебинари</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Тест за кариера</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Блог</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary" id="subscribeBtn" data-toggle="modal" data-target="#registerModal" role="button">Пријави се</a>
            </li>
          </ul>
        </div>
      </nav>

  <!-- Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="modalLabel">Пријави се</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/register" method="POST">
          @csrf
            <div class="form-group">
            <input name="email" type="email" class=" d-inline-block ml-5" id="email" aria-describedby="emailHelp" placeholder="Email Address">
          </div>
        @yield('categoryInModalForm')


        <button id="modal_form_btn" class="btn btn-primary ml-5" type="submit">Испрати</button>
          </form>
        </div>

      </div>
    </div>
  </div>


      <div class="container-fluid content">
        <div class="row">
          <div class="col-12 text-center" id="subscribeSection">
            <h2>Приклучи се на {{ $userCount }} ентузијасти и учи {{ $categoryName }}.</h2>
            <h2>Бесплатно.</h2>
            <form action="/register" method="POST" class="form-inline" id="subscribe_form">
              @csrf
              <div class="input-group">
                <div class="input-group-prepend">
                  <input name="email" type="email" id="subscribe_form_email" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                @yield('category')
                
                <button class="btn btn-light btn-block" type="submit">Пријави се</button>
              </div>
            </form>
            <div>Можеш да се ислкучиш од листата на маилови во секое време!</div>
          </div>

        <div class="container-fluid content">
          <div class="row">
            @yield('content')
          </div>
        </div>
    </div>
    </div>


    <div class="container-fluid footer">
    <div class="row">
      <div class="col-12 col-md-4 d-flex justify-content-center">
        <a href="https://brainster.co/about">About us</a>
        <a href="https://brainster.co/contact​">Contact</a>
        <a href="https://www.facebook.com/pg/brainster.co/photos/">Gallery</a>
      </div>

      <div class="col-12 col-md-4 d-flex justify-content-center">
        <a href="#"><img class="brainster_logo" src="/images/logo.png"></a>
      </div>

      <div class="col-12 col-md-4 d-flex justify-content-center">
        <a href="https://www.linkedin.com/school/brainster-co/"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/brainsterio"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/brainster.co/"><i class="fab fa-facebook-f"></i></a>
      </div>
  </div>
</div>

</body>
</html>
