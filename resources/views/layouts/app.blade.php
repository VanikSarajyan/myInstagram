<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') | myInstagram</title>

    <!-- add icon link -->
    <link rel="icon" type="image/icon type" href="data:image/png;base64,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">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/profile/1') }}">
                    myInstagram
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 d-flex">
            @yield('content')
        </main>
    </div>
</body>
</html>
