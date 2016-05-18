<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <script src="{{{ URL::asset('js/jquery.js') }}}"></script>
        <script src="{{{ URL::asset('js/bootstrap.min.js') }}}"></script>

    <!-- jQuery -->
        <link href="{{{ asset('css/simple-sidebar.css') }}}" rel="stylesheet"/>
        <link href="{{{ asset('css/bootstrap.min.css') }}}" rel="stylesheet"/>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        
        <style>
            body {
                font-family: 'Lato';
            }

            .fa-btn {
                margin-right: 6px;
            }
            .block{
                display: block;
            }
        </style>
    </head>
    <body>
        
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
                <li>
                    <a href="#">My Course</a>
                </li>
                <li>
                    <a href="#">Achievement</a>
                </li>
                <hr/>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Browse all course</a>
                </li>
                <li>
                    <a href="#">Log Out</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Course Taken</h1>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="col-xs-6">
                                 <img src="{{{asset('images/shutterstock_147095324.jpg')}}}" class="img-thumbnail block" alt="Cinque Terre" width="304" height="236">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque lacus viverra odio ullamcorper finibus.
                            </div>
                            <div class="col-xs-6">
                                 <img src="{{{asset('images/shutterstock_147095324.jpg')}}}" class="img-thumbnail block" alt="Cinque Terre" width="304" height="236">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque lacus viverra odio ullamcorper finibus.
                            </div>
                        </div>
                    </div>
                </div>
                <h1>Recommended Course</h1>
                                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="col-xs-6">
                                 <img src="{{{asset('images/sub_zero_mortal_kombat_x-t2.jpg')}}}" class="img-thumbnail block" alt="Cinque Terre" width="304" height="236">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque lacus viverra odio ullamcorper finibus.
                            </div>
                            <div class="col-xs-6">
                                 <img src="{{{asset('images/sub_zero_mortal_kombat_x-t2.jpg')}}}" class="img-thumbnail block" alt="Cinque Terre" width="304" height="236">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque lacus viverra odio ullamcorper finibus.
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    </body>
</html>