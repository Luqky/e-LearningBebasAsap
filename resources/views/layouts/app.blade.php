<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bebas Asap Learning</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{!!asset('css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/app.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/font-awesome.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/font-awesome.min.css')!!}" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body id="page-top" class="index">

        @include('layouts.partials._navigation')

        @include('layouts.partials._header')

        @yield('content')

<!--
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
//-->
                <!-- Collapsed Hamburger -->
                <!--
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
//-->
                <!-- Branding Image -->
<!--
                <a class="navbar-brand" href="{{ url('/') }}">
                    Bebas Asap Learning
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
//-->
                <!-- Left Side Of Navbar -->
<!--
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/kursus') }}">Kursus</a></li>
                    <li><a href="{{ url('/kami') }}">Tentang Kami</a></li>
                </ul>
//-->
                <!-- Right Side Of Navbar -->
<!--
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
<!--
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ url('/login') }}">Masuk</a></li>
                        <li><a href="{{ url('/register') }}">Daftar</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
//-->

    @include('layouts.partials._footer')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
</body>
</html>
