<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="{!! asset('css/agency.css') !!}" rel="stylesheet">


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
