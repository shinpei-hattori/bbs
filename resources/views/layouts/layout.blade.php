<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>掲示板サイト</title>
  </head>
  <body>
    
        <nav class="navbar navbar-expand-md  navbar-light bg-info ">
          <div class="container">
              <a class="navbar-brand text-white display-1" href="/bbs">掲示板</a>  
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-navi" aria-controls="bs-navi" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse " id="bs-navi">
                  <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}">ホームへ</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('user.show')}}">会員情報へ</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="{{route('login')}}">ログイン</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">ログアウト</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">ブログ</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">お問い合わせ</a></li> -->
                  </ul>
              </div>

              <ul class="navbar-nav ml-auto">
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">新規登録</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              ログアウト
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

    @section('container')
    <div class="container mt-5 mb-5">
    
      <div class="row">
        <div class="col-3">
          <div class="list-group" id="list-tab" role="tablist">
          <a class="btn btn-primary mb-3" href="{{ route('posts.edit') }}" role="button">投稿履歴</a>
          <a class="btn btn-danger mb-3" href="{{ route('posts.create') }}" role="button">投稿する</a>
          <a class="list-group-item list-group-item-action"
                 href="{{ route('posts.index',['cat_name' => '全部']) }}"
                >全カテゴリ</a>
            <a class="list-group-item list-group-item-action"
                 href="{{ route('posts.index',['cat_name' => '恋愛']) }}"
                >恋愛</a>
            <a class="list-group-item list-group-item-action" id="tab-menu-3"
                href="{{ route('posts.index',['cat_name' => '旅行']) }}"
                >旅行</a>
            <a class="list-group-item list-group-item-action" id="tab-menu-3"
            href="{{ route('posts.index',['cat_name' => 'ゲーム']) }}"
                >ゲーム</a>
            <a class="list-group-item list-group-item-action" id="tab-menu-3"
                href="{{ route('posts.index',['cat_name' => 'スポーツ']) }}"
                >スポーツ</a>
            <a class="list-group-item list-group-item-action" id="tab-menu-3"
                href="{{ route('posts.index',['cat_name' => '機械']) }}"
                >機械</a>
            <a class="list-group-item list-group-item-action" id="tab-menu-3"
                href="{{ route('posts.index',['cat_name' => '仕事']) }}"
                >仕事</a>
                
          </div>
        </div>

    @yield('content')
      </div>
    </div>
    @show

    @yield('login')

    @section('footer')
      <div class="bg-info p-3 mb-2 text-center">-END-</div>
    @show

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>