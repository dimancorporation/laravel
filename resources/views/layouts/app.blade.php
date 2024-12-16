<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
@auth
    <nav>
        <div class="wrapper">
            <div class="logo">
                <img src="{{asset('images/logo_blue.png')}}" alt="Логотип компании" class="logo_cabinet" height="80" align="left">
            </div>
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">
                <label for="close-btn" class="btn close-btn">
                    <img width="40" src="{{asset('images/light-cancel.svg')}}">
                </label>
                <li>
                    <a class="nav-link {{ request()->is('my-deal') ? 'active' : '' }}" href="/my-deal">
                        Мое дело
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ request()->is('status-description*') ? 'active' : '' }}" href="/status-description">
                        Описание статусов
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ request()->is('document-list*') ? 'active' : '' }}" href="/document-list">
                        Список документов
                    </a>
                </li>
                <li>
                    <a class="menu-item nav-link {{ request()->is('offer-agreement*') ? 'active' : '' }}" href="/offer-agreement">
                        Договор оферты
                    </a>
                </li>
                <li class="oplata">
                    <a class="menu-item nav-link {{ request()->is('payment*') ? 'active' : '' }}" href="/payment">
                        Оплата
                    </a>
                </li>
                <li><a href="logout.php" class="menu-item">Выход</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><img width="40" src="{{asset('images/light-menu.svg')}}"></label>
        </div>
    </nav>
@endauth
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
