<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="sticky-top navbar navbar-expand-md navbar-dark nav-custom shadow-sm">
    <div class="container-fluid">
    
        <button type="button" class="btn btn-outline-light">
            <a class='navbar-brand  text-center' href="{{ url('/') }}"> 
                <img src="../images/ADIK_LOGO_NEW3.jpg">
                {{-- &nbsp; --}}
                {{-- <span>ADIK RESTAURANT</span> --}}
            </a>
        </button>
        &nbsp;
        &nbsp;

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @if(Auth::guard('admin')->check())
                <li class="nav-item">
                    <a class="nav-link" href="/admin" >MANAGE-MENU</a>
                </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/admin" onclick="myFunction4()">Add Cuisine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin" onclick="myFunction1()">Add Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin" onclick="myFunction2()">Add Combo</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="/admin" onclick="myFunction3()">Manage Today's Special</a>      
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link js-scroll " href="/admin/vieworders">  VIEW-ORDERS </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="/admin/showpaymode">MANAGE-CASH-MODE</a>
                    </li>
                @endif
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        {{-- <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></button>  --}}
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link js-scroll" href="{{ route('register') }}">{{ __('SIGNUP') }}</a>
                            {{-- <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></button> --}}
                            
                        </li>
                    @endif
                @else
                @if(Auth::guard('web')->check())
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('home') }}">HOME</a>
                        
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('ordering.navigate') }}">MENU</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('ordering.show') }}">ORDER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('ordering.cart') }}">CART</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('ordering.history') }}">ORDER-HISTORY</a>
                    </li>
                @endif
                
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
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