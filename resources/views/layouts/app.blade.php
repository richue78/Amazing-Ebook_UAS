<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<header class="fixed-top">
    <div id="app">
    <div class=" p-4 bg-primary">
        <div class="d-flex justify-content-center">
            <a class=" text-dark" href="/home" style="position: absolute;">
                <h1>Amazing E-Book</h1>
            </a>
        </div>
        <div class="d-flex justify-content-end">
            <div class="row"> 
                <div class="bg-warning">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                        @endif
                    @endforeach
                    </div>
                </div>
                    @guest
                    <a class="nav-link bg-warning mr-4"style="color: black;" href="{{ route('register') }}">{{ __('messages.Sign Up') }}</a></li>
    
                    <a class="nav-link bg-warning"style="color: black;" href="{{ route('login') }}">{{ __('messages.Login') }}</a></li>
                    @endguest
                    @auth
                    <a class="nav-link bg-warning mr-4" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                    </a>
                    @endauth
         </li>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
            </div>
        </div>
    </div>
    @auth  
    <div class="bg-warning p-3">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <a href="{{ url('/home') }}">{{ __('messages.Home') }}</a>
                </div>
                <div class="col">
                    <a href="/cart/{{ Auth::user()->id }}">{{ __('messages.Cart') }}</a>
                </div>
                <div class="col">
                    <a href="/profile">{{ __('messages.Profile') }}</a>
                </div>
                @auth    
                @if (Auth::user()->role->role_desc == "Admin")                        
                <div class="col">
                    <a href="/accountmaintenance">{{ __('messages.Account Maintenance') }}</a>   
                </div>
                @endif
                @endauth
            </div>
        </div>
    </div>
    @endauth
    
</div>
</header>

<body>
    <div id="app">
        <div class=" p-4 bg-primary">
            <div class="d-flex justify-content-center">
                <a class=" text-dark" href="/home" style="position: absolute;">
                    <h1>Amazing E-Book</h1>
                </a>
            </div>
            <div class="d-flex justify-content-end">
                <div class="row"> 
                    <div class="bg-warning">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                            @endif
                        @endforeach
                        </div>
                    </div>
                        @guest
                        <a class="nav-link bg-warning mr-4"style="color: black;" href="{{ route('register') }}">{{ __('messages.Sign Up') }}</a></li>
        
                        <a class="nav-link bg-warning"style="color: black;" href="{{ route('login') }}">{{ __('messages.Login') }}</a></li>
                        @endguest
                        @auth
                        <a class="nav-link bg-warning mr-4" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                        </a>
                        @endauth
             </li>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </div>
            </div>
        </div>
        @auth  
        <div class="bg-warning p-3">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col">
                        <a href="{{ url('/home') }}">{{ __('messages.Home') }}</a>
                    </div>
                    <div class="col">
                        <a href="/cart/{{ Auth::user()->id }}">{{ __('messages.Cart') }}</a>
                    </div>
                    <div class="col">
                        <a href="/profile">{{ __('messages.Profile') }}</a>
                    </div>
                    @auth    
                    @if (Auth::user()->role->role_desc == "Admin")                        
                    <div class="col">
                        <a href="/accountmaintenance">{{ __('messages.Account Maintenance') }}</a>   
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
        @endauth
        
    </div>
       <div class="py-4">
            @yield('content')
        </div> 
</body>
<footer class="fixed-bottom" >
            <div class="d-flex justify-content-center bg-primary text-light">
              <p class="copyright">&copy; Amazing E-Book 2022</p>
            </div>
          </footer>
</html>


