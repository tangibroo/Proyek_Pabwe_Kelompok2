<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Laravel</title>
</head>
<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>
<body>

	<!-- Navbar -->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top scrolling-navbar">
	    <div class="container-fluid">
	      <button
	        class="navbar-toggler"
	        type="button"
	        data-mdb-toggle="collapse"
	        data-mdb-target="#navbarExample01"
	        aria-controls="navbarExample01"
	        aria-expanded="false"
	        aria-label="Toggle navigation"
	      >
	        <i class="fas fa-bars"></i>
	      </button>
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
	  <!-- Navbar --><br><br><br>

	<div class="card container-fluid" style="width: 18rem; align-content: center;">
	  <div class="card-body">
	    <h5 class="card-title">Loin To Continue</h5>
		<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="user_email" placeholder="Email" required="">
	    <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="user_pass" placeholder="Password" required="">
	    <button type="submit" class="btn btn-info" style="align-content: center;">
			LOGIN
		</button>
		<br>
	    <a href="#" class="card-link" >Forget Password</a>
	    <a href="#" class="card-link" >Register</a>
	  </div>
	</div>
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