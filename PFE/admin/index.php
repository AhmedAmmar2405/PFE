<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="admin.css">

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
          <a class="nav-link active" href="./index.php">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerer vendeur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerer Categories&Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./demande.php">Demande deposition : <?php include '../db_conn.php';
          $count_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM commande");
$count_array = mysqli_fetch_array($count_query);
$count = $count_array['total'];
echo $count; ?> </a>
        </li>        
      </ul>
    </div>
  </div>
</nav>
</section>
<span><br></span>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
			<div class="col-md-4"> <h1><center>PAGE ADMIN</center></h1>
			</div></div>
	<span><br><br><br></span>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-4"> <h4><b><u>STATISTIQUES :</u></b> </h4>
      </div></div>
      <span><br></span>
	<div class="row">
		<div class="col-md-4"></div>


	</div>

</div>

<section>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">

      <!--ls categories-->
      
        <table class="table table-striped"><thead class="thead-dark"><tr><th>CATEGORIE TENDENCES</th><th><center>VISITES</center></th>
       <?php 
        
        
        $get_cat="SELECT * FROM `categorie` ORDER BY `categorie`.`nbreVisite` DESC LIMIT 4";
        $run=mysqli_query($conn,$get_cat);
        while($resultat = mysqli_fetch_array($run))
        {
          echo '<tr>';
          echo '<td>'.$resultat['nom'].'</td>';
          echo '<td>'.$resultat['nbreVisite'].'</td>';
          echo '</tr>';

          
        }
      
  ?></center></table>
      
    </div>

    <div class="col-md-3">

       <!--ls produits les plus visité-->
      
        <table class="table table-striped"><thead class="thead-dark"><tr><th>PRODUIT EN FEU</th><th><center>VISITES</center></th>
       <?php 
        
        
        $get_pro="SELECT * FROM produit ORDER BY produit.nbreClick DESC LIMIT 3";
        $run=mysqli_query($conn,$get_pro);
        while($resultat = mysqli_fetch_array($run))
        {
          echo '<tr>';
          echo '<td>'.$resultat['nom'].'</td>';
          echo '<td>'.$resultat['nbreClick'].'</td>';
          echo '</tr>';

          
        }
      
  ?></center></table>
      
    </div>

    <div class="col-md-4">

       <!--les dernier produit ajoutée-->
      
        <table class="table table-striped"><thead class="thead-dark"><tr><th>DERNIER PRODUIT APPROUVEES</th><th><center>DATE</center></th><th>VISITE</th>
       <?php 
        
        
        $get_lpro="SELECT * FROM produit ORDER BY produit.date_appro DESC LIMIT 3";
        $run=mysqli_query($conn,$get_lpro);
        while($resultat = mysqli_fetch_array($run))
        {
          echo '<tr>';
          echo '<td>'.$resultat['nom'].'</td>';
          echo '<td>'.$resultat['date_appro'].'</td>';
          echo '<td>'.$resultat['nbreClick'].'</td>';
          echo '</tr>';

          
        }
      
  ?></center></table>
      
    </div>


  </div>

</section>


</body>
</html>