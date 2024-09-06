<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        CoachtechFleaMarket
    </title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    <img src="{{ asset('images/logo.svg') }}">
                </a>

                @if (!Request::is('login') && !Request::is('register'))

                <form>
                    <input type="text" name="query" placeholder="何をお探しですか" id="search-input">
                </form>

                <nav>
                    <ul class="header-nav">
                        
                        <!--ログイン前-->
                        @guest
                        <li class="header-nav__item">
                            <a class="header-nav__button" href="/login">ログイン</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/register">会員登録</a>
                        </li>
                        @endguest
                        
                        <!--ログイン後-->
                        @auth
                        <li class="header-nav__item">
                            <form class="form" action="/logout" method="post">
                                @csrf
                                <button class="header-nav__button">ログアウト</button>
                            </form>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/mypage">マイページ</a>
                        </li>

                        @endauth
                        <li class="header-nav__item">
                            <button class="header-nav__sell-button" href="/sell">出品</button>
                        </li>
                    </ul>
                </nav>
                @endif
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>