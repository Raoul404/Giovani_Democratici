<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img style = "width:7vh;" src='/storage/slider_images/giovani_democratici_logo.svg' alt="">
        </a>
        <button class="menu-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <div class="burger">
                <div class="line"></div>
                <div class="c-line"></div>
                <div class="line"></div>
            </div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link gd-btn font-sm" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link gd-btn font-sm" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link gd-btn font-sm" href="/posts">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link gd-btn font-sm" href="/contacts">Contacts</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link font-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <!--@if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif-->
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item font-sm" href="{{ route('register') }}">{{ __('Register') }}</a>
                            <a class="dropdown-item font-sm" href="/dashboard">Dashboard</a>
                            <a class="dropdown-item font-sm " href="{{ route('logout') }}"
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
<br>

