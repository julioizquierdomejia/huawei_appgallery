<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" sizes="16x16" type="image/x-icon" href="{{ asset('img/favicon-16x16.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    {{isset($title) ? $title . ' | ' : ''}} Huawei | Claro Club
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
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
  <body class="page text-white {{isset($body_class) ? $body_class : ''}}">
    <main class="main">
      @include('layouts.header')
      <div class="content pt-4">
        @yield('content')
      </div>
      @include('layouts.footer')
    </main>
    <!-- Modal -->
    <div class="modal fade" id="modalSoon" tabindex="-1" role="dialog" aria-labelledby="modalRegisterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <h5 class="modal-title" id="modalRegisterTitle">Pronto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <p>Disfruta tu masterclass desde este 9 de diciembre a las 6pm. ¡No te la pierdas!</p>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('owl.carousel/2.3.4/owl.carousel.js') }}"></script>
    @yield('javascript')
  </body>
</html>