<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>Monja @yield('title')</title>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <body class="antialiased">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-info fixed-top scrolling-navbar">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarExample01">
                <h2 >Monja-Kuy</h2>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" style="color:black;" aria-current="page" href="http://localhost:8000/home" >Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" style="color:black;" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black;" href="#" >Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black;" href="#">Payment Info</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" style="color:black;" href="#" data-bs-toggle="dropdown">Login/Register</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li><a class="dropdown-item" href="#">Register</a></li>
                            </ul>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
        <!-- ENDNavbar -->

        <br><br><br>
        <!-- Container -->        
        <div class="container-fluid">
            <div class="row mt-1">
                <div class="col-sm-2 absolute-top">
                    <!--ASIDE-->
                    @yield('aside')
                    <!--end ASIDE-->
                </div>
                <div class="col-sm-10">
                    <!--CONTENT-->
                    @yield('content')
                    <!--ENDCONTENT-->
                </div>
            </div>
        </div>
        <!-- ENDContainer -->

        <!-- Footer -->
        <footer class="bg-light fixed-bottom">
          <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Text -->
                <section class="mb-4">
                    <h2 style="color:#336699;">
                        MONJA<hr>
                        <p style="font-size: small;">© 2021 Copyright: <a href="#" style="color:#336699;">Project 2 PABWE</a></p>
                    </h2>
                </section>
                <!-- Section: Text -->
            </div>
          <!-- Grid container -->
        </footer>
        <!-- Footer -->
    </body>
</html>
