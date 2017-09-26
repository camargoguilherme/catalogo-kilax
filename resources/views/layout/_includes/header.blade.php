<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    </head>
    <body>
    <div class="geral">
        <div class="geral">
            <nav>
                <div class="nav-wrapper green" >
                    <a href="#!" class="brand-logo">Kilax Japan</a>
                    <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Home</a></li>

                        @if(Auth::guest())
                            <li><a href="{{ route('login.index') }}">Login</a></li>
                        @else
                            <li><a href="{{route('admin.produtos')}}">Produtos</a></li>
                            <li><a href="#">{{Auth::user()->name}}</a></li>
                            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                        @endif


                    </ul>
                    <ul class="side-nav" id="mobile">
                        <li><a href="/">Home</a></li>

                        @if(Auth::guest())
                            <li><a href="{{ route('login.index') }}">Login</a></li>
                        @else
                            <li><a href="{{route('admin.produtos')}}">Produtos</a></li>
                            <li><a href="#">{{Auth::user()->name}}</a></li>
                            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>