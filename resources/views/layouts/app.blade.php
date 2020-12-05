<!DOCTYPE html>
<html class="h-100" lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" sizes="16x16" type="image/x-icon" href="{{ asset('img/favicon-16x16.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    {{isset($title) ? $title . ' | ' : ''}} Huawei | Claro Club
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600;700&display=swap" rel="stylesheet">
    @yield('css')
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('owl.carousel/2.3.4/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  </head>
  <body class="page text-white h-100 {{isset($body_class) ? $body_class : ''}}">
    <main class="main h-100">
      @include('layouts.header')
      <div class="content h-100 pt-4">
        @yield('content')
      </div>
      {{-- <footer class="footer">
        @include('layouts.footer')
      </footer> --}}
    </main>
    <!-- Modal -->
    <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegisterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <h5 class="modal-title" id="modalRegisterTitle">Regístrate</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label class="sr-only" for="u-name">Nombres</label>
              <input type="text" id="u-name" name="name" class="form-control user-name" placeholder="Nombres">
            </div>
            <div class="form-group">
              <label class="sr-only" for="u-email">Correo</label>
              <input type="text" id="u-email" name="email" class="form-control user-email" placeholder="correo electrónico">
            </div>
            <div class="form-group">
              <label class="sr-only" for="u-code">Celular</label>
              <input type="text" id="u-code" name="celular" class="form-control user-code" placeholder="Celular">
            </div>
            <div class="form-group">
              <label class="sr-only" for="u-code">DNI</label>
              <input type="text" id="u-code" name="DNI" class="form-control user-code" placeholder="DNI">
            </div>
            <div class="form-group">
              <label class="sr-only" for="u-code">Código</label>
              <div class="row">
                <div class="col-11">
                  <input type="text" id="u-code" name="code" class="form-control user-code" placeholder="Código">
                </div>
                <div class="col-1">
                  <a href=""><i class="fas fa-question-circle"></i></a>
                </div>
              </div>

            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger">Enviar</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('owl.carousel/2.3.4/owl.carousel.js') }}"></script>
    @yield('javascript')
  </body>
</html>