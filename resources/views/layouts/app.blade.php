<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
	@yield('scripts')
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
				<div class="lhs">
					<a class="navbar-brand" href="{{ url('/') }}">
                	    {{ config('app.name', 'Laravel') }}
                	</a>
					<ul class="navbar-links">
						<li class="navbar-item">
							<a class="navbar-link" href="/posts">Статьи</a>
						</li>
						<li class="navbar-item">
							<a class="navbar-link" href="/users">Пользователи</a>
						</li>
					</ul>
				</div>
				<div class="rhs">
					<form class="search" action="/search" method="GET">
						<input class="search__input" name="search" type="text">
						<button type="submit"><img class="search__icon" src="{{ asset('img/search_icon.svg') }}" alt=""></button>
					</form>
                	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                	    <span class="navbar-toggler-icon"></span>
                	</button>
                	<div class="collapse navbar-collapse" id="navbarSupportedContent">
                	    <!-- Left Side Of Navbar -->
                	    <ul class="navbar-nav me-auto">

                	    </ul>

                	    <!-- Right Side Of Navbar -->
                	    <ul class="navbar-nav ms-auto">
                	        <!-- Authentication Links -->
                	        @guest
                	            @if (Route::has('login'))
                	                <li class="nav-item">
                	                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                	                </li>
                	            @endif

                	            @if (Route::has('register'))
                	                <li class="nav-item">
                	                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                	                </li>
                	            @endif
                	        @else
                	            <li class="nav-item dropdown">
                	                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                	                    {{ Auth::user()->name }}
                	                </a>

                	                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                	                    <a class="dropdown-item" href="{{ route('logout') }}"
                	                       onclick="event.preventDefault();
                	                                     document.getElementById('logout-form').submit();">
                	                        {{ __('Logout') }}
                	                    </a>

                	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                	                        @csrf
                	                    </form>
                	                </div>
                	            </li>
                	        @endguest
                	    </ul>
                	</div>
				</div>
            </div>
        </nav>
		<main>
			@yield('content')
		</main>
    </div>
</body>
</html>
