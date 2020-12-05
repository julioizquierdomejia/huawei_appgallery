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
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">
    @yield('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  </head>
  <body class="page pt-5 text-white h-100 {{isset($body_class) ? $body_class : ''}}">
    <main class="main pt-5 h-100">
      @include('layouts.header')
      <div class="content container h-100">
        @yield('content')
      </div>
      {{-- <footer class="footer">
        @include('layouts.footer')
      </footer> --}}
    </main>
    <!--   Core JS Files   -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
  </body>
</html>