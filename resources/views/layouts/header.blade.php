<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark pt-md-4 px-xl-5">
    <a class="navbar-brand" href="/">
      <span class="d-flex align-items-center">
        <img class="logo" src="{{ asset('img/logo_huawei.png') }}" width="180">
        <span class="px-3 text-muted"> <img src="{{ asset('img/raya.png') }}" width="3" height="50"> </span>
      </span>
    </a>
    <a href="https://appgallery.huawei.com/#/app/C101017573?channelId=marketing&detailType">
      <img class="logo" src="{{ asset('img/logo_claro.png') }}" width="160" style="margin-bottom: 8px; margin-left: -16px;">
    </a>
    <ul class="navbar-nav ml-auto align-items-center">
      <li class="nav-item">
        @if (Auth::user())
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="btn btn-sm text-white" href="/logout" style="font-size: 15px;min-width: 0" type="submit">Cerrar sesión <i class="fas fa-sign-out-alt"></i></button>
        </form>
        @endif
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://consumer.huawei.com/pe/mobileservices/appgallery/">
          <img class="logo-app_gallery" src="{{ asset('img/exploralo-app-gallery.png') }}" width="140"></a>
      </li>
    </ul>
  </nav>
</header>