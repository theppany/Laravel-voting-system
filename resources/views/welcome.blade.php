<!DOCTYPE html>
<head>
    <title>vote online</title>

    <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> About<i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">POLLING SYSTEM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    @if(!Auth::check())
                    <li>
                        <a class="page-scroll" href="{{route('login')}}">Login</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('logout')}}" href="#about">Logout</a>
                    </li>
                    @endif

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><l>Holla</l>.</h1>
                <p>Welcome to <b>POLLING SYSTEM</b> Click below to <b>vote</b> or see the <b>results</b>.</p>
               <break></break> <a href="{{route('show')}}" class="btn btn-primary btn-xl page-scroll">vote</a><break></break>
               <break></break> <a href="{{route('results')}}" class="btn btn-primary btn-xl page-scroll">see results</a><break></break>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">polling system</h2>
                    
                    <p class="text-faded">
              
</p>

                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
           <div id="footer">
     <p>Copyright.2016<b>Derk</b>.All rights reserved.</p>
    </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>s

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
