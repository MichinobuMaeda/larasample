<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>前田屋商店 | ご案内</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
  </head>
  <body>

<div class="title-bar" data-responsive-toggle="realEstateMenu" data-hide-for="small">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>
<div class="top-bar" id="realEstateMenu">
  <div class="top-bar-left">
    <ul class="menu">
      <li class="menu-text">前田屋商店</li>
      <li><a href="#">メニュー１</a></li>
      <li><a href="#">メニュー２</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li class="menu-text">{{ Auth::user() ? Auth::user()->name : 'ゲスト' }}</li>
@if (Auth::user())
      <li>
        <a
          href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
        >ログアウト</a>
      </li>
@else
      <li><a href="{{ route('login') }}">ログイン</a></li>
      <li><a href="{{ route('register') }}">新規登録</a></li>
@endif
    </ul>
  </div>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
</div>
<br>

@yield('content')

<footer>
  <div class="grid-x expanded callout secondary">
    <div class="small-6 large-3 cell">
      <div class="lead">店舗</div>
      <ul class="menu vertical">
        <li><a href="#">松山本店</a></li>
        <li><a href="#">高知支店</a></li>
        <li><a href="#">徳島支店</a></li>
        <li><a href="#">高松支店</a></li>
      </ul>
    </div>
    <div class="small-6 large-3 cell">
      <div class="lead">製品・サービス</div>
      <ul class="menu vertical">
        <li><a href="#">製品１</a></li>
        <li><a href="#">製品２</a></li>
        <li><a href="#">サービス１</a></li>
        <li><a href="#">サービス２</a></li>
      </ul>
    </div>
    <div class="small-6 large-3 cell">
      <div class="lead">お知らせ</div>
      <ul class="menu vertical">
        <li>
          <a href="https://twitter.com/mixnb">
            <i class="fi-social-twitter"></i> Twitter
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/michinobu.maeda">
            <i class="fi-social-facebook"></i> Facebook
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/michinobumaeda/">
            <i class="fi-social-instagram"></i> Instagram
          </a>
        </li>
        <li>
          <a href="https://github.com/MichinobuMaeda/larasample">
            <i class="fi-social-github"></i> GutHub
          </a>
        </li>
      </ul>
    </div>
    <div class="small-6 large-3 cell">
      <div class="lead">前田屋商店について</div>
      <ul class="menu vertical">
        <li><a href="#">お問い合わせ</a></li>
        <li><a href="#">会社概要</a></li>
        <li><a href="#">採用情報</a></li>
        <li><a href="#">プライバシーポリシー</a></li>
      </ul>
    </div>
  </div>
  <div class="grid-x callout">
    <div class="medium-12 cell">
      <p class="subheader">
        &copy; 2018
        <a href="https://michinobu.jp/tec/">Michinobu Maeda</a>
        . Code licensed
        <a href="https://github.com/MichinobuMaeda/larasample/blob/master/LICENSE">MIT</a>.
      </p>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
<script>
  $(document).foundation();
</script>

  </body>
</html>
