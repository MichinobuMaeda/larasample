@extends('layout')

@section('content')
<article class="grid-container">
  <div class="grid-x grid-margin-x">
    <div class="medium-7 large-6 cell">
      <h1>Laravel と Foundation のサンプル</h1>
      <p class="subheader">
        このページのレイアウトは <a href="https://foundation.zurb.com">Foundation</a> の
        <a href="https://foundation.zurb.com/templates-previews-sites-f6/real-estate.html">"Real Estate or Travel"</a>
        を手直ししたものです。
        Internet Explorer の 9 以降のバージョンに対応しています。
        スマートフォンの小さな画面でも読むことができるので、
        パソコンの場合はブラウザのウィンドウの幅を狭くして試してみてください。
      </p>
    </div>
    <div class="show-for-large large-3 cell">
      <img src="https://placehold.it/400x370&text=Sample" alt="サンプル画像">
    </div>
    <div class="medium-5 large-3 cell">
      <form action="http://www.google.co.jp/search" method="get">
        <div class="grid-x">
          <div class="small-8">
            <input type="text" name="q" placeholder="Googleで検索">
          </div>
          <div class="small-4" style="text-align:center">
            <button type="submit" name="btnG" class="button">検索</button>
            <input type="hidden" name="hl" value="ja">
            <input type="hidden" name="ie" value="UTF-8">
            <input type="hidden" name="domains" value="michinobu.jp">
            <input type="hidden" name="sitesearch" value="michinobu.jp">
          </div>
        </div>
      </form>
      <div class="small-12">
        <p>
          このサンプルのソースは
          <a href="https://github.com/MichinobuMaeda/larasample">GuiHub</a>
          のリポジトリをご参照ください。
        </p>
        <div>
          テスト用のメールアドレス : 64116d00ef-7012f0@inbox.mailtrap.io
        </div>
        <div>
          テスト用のパスワード : password
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <hr>
  </div>
  <div class="">
    <p class="lead">製品とサービスのご紹介</p>
  </div>
  <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
    <div class="cell">
      <div class="callout">
        <p>製品１</p>
        <p><img src="https://placehold.it/400x370&text=Sample" alt="サンプル画像"></p>
        <p class="lead">製品１の説明</p>
        <p class="subheader">
          製品１の説明の本文です。製品１の説明の本文です。製品１の説明の本文です。製品１の説明の本文です。
        </p>
      </div>
    </div>
    <div class="cell">
      <div class="callout">
        <p>製品２</p>
        <p><img src="https://placehold.it/400x370&text=Sample" alt="サンプル画像"></p>
        <p class="lead">製品２の説明</p>
        <p class="subheader">
          製品２の説明の本文です。製品２の説明の本文です。製品２の説明の本文です。製品２の説明の本文です。
        </p>
      </div>
    </div>
    <div class="cell">
      <div class="callout">
        <p>サービス</p>
        <p><img src="https://placehold.it/400x370&text=Sample" alt="サンプル画像"></p>
        <p class="lead">サービス</p>
        <p class="subheader">
          サービスの説明の本文です。サービスの説明の本文です。サービスの説明の本文です。サービスの説明の本文です。
        </p>
      </div>
    </div>
  </div>
</article>
@endsection
