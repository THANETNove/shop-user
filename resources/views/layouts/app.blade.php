<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Zipmax789</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    shop-user
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                   
                    <ul class="nav">
                    @if (Auth::user()->is_idadmin === '1')

                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('money-user')}}">เติมเงิน</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('getOutMonetUser')}}" >ถอนเงิน</a>
                      </li> 

                    @elseif (Auth::user()->is_idadmin === '2')

                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('won-prize')}}"  >ผลทายรางวัล</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('miniature')}}"  >เพิ่มผลทายรางวัล</a>
                    </li>      
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('product')}}"  >ผลคุณรางวัล</a>
                    </li>    

                    @elseif (Auth::user()->is_idadmin === '3')

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ URL::to('home')}} ">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('money-user')}}">เติมเงิน</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('getOutMonetUser')}}" >ถอนเงิน</a>
                      </li> 
                      <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('newAdmin')}}" >เพิ่ม Admin</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('admin')}}" >Admin</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('link-line')}}"  >Link-Line</a>
                      </li>       
                      <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('buy-goods')}}"  >สั่งชื้อสินต้า</a>
                      </li>     
                      <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('won-prize')}}"  >ผลทายรางวัล</a>
                      </li>   
                      <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('miniature')}}"  >เพิ่มผลทายรางวัล</a>
                      </li>      
                      <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('product')}}"  >ผลคุณรางวัล</a>
                      </li> 
                      <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('bonus')}}"  >โบนัสที่ได้</a>
                      </li> 

                     @endif
                            
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
                                    {{ Auth::user()->username }}
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@include('layouts.reload_number')
</body>
</html>
