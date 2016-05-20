<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="css/app.css">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        #elearning-bebasasap .list-menu li{
            text-align: left;
        }
    </style>
</head>
<body id="app-layout">
  <div id="elearning-bebasasap">
    <nav class="navbar navbar-default main-nav">
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
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img" src="" alt="[company logo]" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                {{-- <ul class="nav navbar-nav">
                    <li><a href="{{ url('/kursus') }}">Kursus</a></li>
                    <li><a href="{{ url('/kami') }}">Tentang Kami</a></li>
                </ul> --}}

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right list-menu">
                  <li><a href="{{url('/')}}">Beranda</a></li>
                  <li><a href="{{url('/kursus')}}">Kursus</a></li>
                  <li><a href="{{url('/kami')}}">Tentang Kami</a></li>
                    <!-- Authentication Links -->
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-dashboard"></i>Dashboard</a></li>
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

    <section id="main-content">
      @yield('content')
    </section>

    <footer>
      <div class="footer-content">
        <div class="container">
          <div class="col-md-6 ">
            <div class="left-footer">
              <ul>
                <li><img class="img img-responsive" src="" alt="[logo 1]" /></li>
                <li><img class="img img-responsive" src="" alt="[logo 2]" /></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="right-footer">
              <p>Copyright (c) {{date('Y')}}</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  <script src="js/all.js"></script>
</body>
</html>
