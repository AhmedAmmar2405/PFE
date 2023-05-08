<!doctype html>
<html>
<head>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="style.css">


</head>
<body>
	<section>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php"><h4><b>SELL&BUY</b></h4></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link active"  href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Vendre produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="http://localhost/pfe/signin/">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/pfe/signup/">Sign up</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
</section>
<span><br></span>
<section>
    <font size="5" face="Georgia, Arial" >
      <center><h1 style="font-size: 2.5em;
      text-align: center;
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 20px;
      border: 2px solid ;
      border-radius: 20px;
      max-width: 600px;
      margin: 0 auto;">Computers</h1></center>
    </font>
</section>

<section>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
  <h3 class="font-weight-bold"><center><b>Sous Categories</b></center></h3>

  <?php 
        session_start();
        include '../getsubcat.php';
        
         ?>
</div>
    </div>
    <div class="col-md-8">
      <center><h2 class="font-weight-bold">Produits</h2></center><br>
     
      <?php 
      
      include '../getprod.php';

      ?>
       
      

    </div>
  </div> 
</div>
</section>

     <div class="row";>
      
     </div>

<section>
  <section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #B2B2B2;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center" style="margin: 0 auto 0 auto;">
          <span class="me-3" style="margin-right: 20px;margin-top:20px;color: BLACK;font-weight: bold;">Register for free : </span>
          <button type="button" class="btn btn-outline-dark" style="border-radius: 30px 30px 30px 30px;font-weight: bold;width: auto;">
            <a href="signup.html" style="color:black;text-decoration: none;">Sign up!</a> 
          </button>
        </p>
      </section>
    </div>
    <!-- Grid container -->

    <div class="container p-4 pb-0"  style="margin: 0 auto 0 auto;">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i>
      </a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

</section>



</body>
</html>