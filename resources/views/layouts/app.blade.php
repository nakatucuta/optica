<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Optica Iris </title><!-- {{ config('app.name', 'Laravel') }} -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}} <!-- no sirva pa un culo -->   
    {!!Html::script('select2-4.0.3/vendor/jquery-2.1.0.js')!!}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/navbar-fixed-top.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('select2-4.0.3/dist/js/select2.js')!!}
    {!!Html::style('select2-4.0.3/dist/css/select2.css',['rel'=>"stylesheet"])!!}
    <!-- estas son las librerias para el slect -->
     

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/index_style.css') }}" rel="stylesheet"><!-- con este llamas el css personalizado osea el de las tablas que antes tenias en el index    index_style -->
    
</head>
<body>





    <div id="app">
        <nav class="navbar navbar-default  "  style="background-color: #29383d;"><!-- navbar-static-top   navbar-inverse-->
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" id="nn">
                        Optica Iris <!-- {{ config('app.name', 'Laravel') }} -->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" id="color-letra-login">Login</a></li>
                            <li><a href="{{ route('register') }}" id="color-letra-registrer">Register</a></li>
                        @else
                            <li class="dropdown"  >
                                <a href="#" id="jj" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret" ></span>
                                </a>

                                <ul class="dropdown-menu" role="menu"  >
                                    <li>
                                        <a href="{{ route('logout') }}" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            </div>
        </nav>

        @yield('content')
    

    <!-- Scripts -->
   
    <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
</body>
</html>
