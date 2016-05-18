<html>
    <head>
        @include('layouts.user-header')
    </head>
    <body>
        
    <div id="wrapper">
        @include('layouts.user-sidebar')
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