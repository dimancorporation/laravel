<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    {{--        <link href="http://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQXK1xIjWoKUIE3Ii0jUH2ZGQIwVtAM8q/XPVaoJm" crossorigin="anonymous">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/util.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/description_statuses.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/list_documents.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/my_business.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/navbar.css')}}" type="text/css" rel="stylesheet">
    {{--    <link href="/resources/bootstrap.min.css" rel="stylesheet">--}}
    {{--    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
</head>
<body>
{{--<nav>--}}
{{--    <div class="wrapper">--}}
{{--        <div class="logo"><img src="images/logo_blue.png" alt="Логотип компании" class="logo_cabinet" height="80" align="left"></div>--}}
{{--        <ul class="navbar-nav">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('my-deal') ? 'active' : '' }}" href="/">Мое дело</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('status-description*') ? 'active' : '' }}" href="/status-description">Описание статусов</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('document-list*') ? 'active' : '' }}" href="/document-list">Список документов</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('offer-agreement*') ? 'active' : '' }}" href="/offer-agreement">Договор оферты</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('payment*') ? 'active' : '' }}" href="/payment">Оплата</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}
<nav>
    <div class="wrapper">
        <div class="logo"><img src="{{asset('images/logo_blue.png')}}" alt="Логотип компании" class="logo_cabinet"
                               height="80" align="left"></div>
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="nav-links">
            <label for="close-btn" class="btn close-btn">
                <img width="40" src="{{asset('images/light-cancel.svg')}}">
            </label>
            <li>
                <a class="nav-link {{ request()->is('my-deal') ? 'active' : '' }}" href="/my-deal">Мое дело</a>
            </li>
            <li>
                <a class="nav-link {{ request()->is('status-description*') ? 'active' : '' }}"
                   href="/status-description">Описание статусов</a>
            </li>
            <li>
                <a class="nav-link {{ request()->is('document-list*') ? 'active' : '' }}" href="/document-list">Список
                    документов</a>
            </li>
            <li>
                <a class="menu-item nav-link {{ request()->is('offer-agreement*') ? 'active' : '' }}"
                   href="/offer-agreement">Договор оферты</a>
            </li>
            <li class="oplata">
                <a class="menu-item nav-link {{ request()->is('payment*') ? 'active' : '' }}" href="/payment">Оплата</a>
            </li>
            <li><a href="logout.php" class="menu-item">Выход</a></li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><img width="40" src="{{asset('images/light-menu.svg')}}"></label>
    </div>
</nav>

{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    --}}{{--    <a class="navbar-brand" href="#">Laravel</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"--}}
{{--            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="logo">--}}
{{--        <img src="{{asset('images/logo_blue.png')}}" alt="Логотип компании" class="logo_cabinet" height="80"--}}
{{--             align="left">--}}
{{--        --}}{{--        <img src="{{HTML::image('images/logo_blue.png')}}" alt="Логотип компании" class="logo_cabinet" height="80" align="left">--}}
{{--    </div>--}}
{{--    <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--        <ul class="navbar-nav">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('my-deal') ? 'active' : '' }}" href="/my-deal">Мое дело</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('status-description*') ? 'active' : '' }}"--}}
{{--                   href="/status-description">Описание статусов</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('document-list*') ? 'active' : '' }}" href="/document-list">Список--}}
{{--                    документов</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('offer-agreement*') ? 'active' : '' }}" href="/offer-agreement">Договор--}}
{{--                    оферты</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->is('payment*') ? 'active' : '' }}" href="/payment">Оплата</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--<main class="py-4 container">--}}
@yield('content')
{{--</main>--}}

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
