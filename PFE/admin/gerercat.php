 <?php 
 include "../db_conn.php";
  ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
          <a class="nav-link" href="./index.php">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerer vendeur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./gerercat.php">Gerer Categories&Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./demande.php">Demande deposition : <?php 
          $count_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM commande");
$count_array = mysqli_fetch_array($count_query);
$count = $count_array["total"];
echo '('.$count.')'; ?></a>
        </li>        
      </ul>
    </div>
  </div>
</nav>
</section>
<br><br>
<section>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" class="d-flex">
                <select class="form-select" name="categorie" style="background-color: lightslategrey;">
    <?php 
    $get_cat="SELECT * FROM categorie";
    $run=mysqli_query($conn,$get_cat);
    while($resultat = mysqli_fetch_array($run))
    {
        $selected = (isset($_POST['categorie']) && $_POST['categorie'] == $resultat['idCat']) ? 'selected' : '';
        echo '<option style="text-align:center" value="'.$resultat['idCat'].'" '.$selected.'>'.$resultat['nom'] .' ('.$resultat['nbreVisite'].')</option>';       
    }
    ?>
</select>

                </div>
                <div class="col-md-1">


                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i></button></div>


                    
               
            </form>

        
    </div>
    <?php 
    if (isset($_POST['submit'])) {
       ?> 
       <div class="row">
           <div class="col-md-1"></div>
           <div class="col-md-10">
               <?php 
               $categorie=$_POST['categorie'];
               $sql = "SELECT * FROM categorie WHERE nom='{$_POST['categorie']}'";


               $getcat=mysqli_query($conn,$sql);
               $tab=mysqli_fetch_array($getcat);
               
               $getprod=mysqli_query($conn,"SELECT * FROM produit WHERE idCat='".$tab['idCat']."'");
               $count=mysqli_num_rows($getprod);
               
               if ($count==0) {
                   echo "<center><b><u>cette categorie est vide</u></b></center>";
               }else{
                $x=0;
               while($res=mysqli_fetch_array($getprod)){
               echo '<div class="col-md-2">';
    echo '<a href="../product/index.php?idProduit='.$res['idProduit'].'" class="btn text-light btn-transparant">';
    echo '<div class="card border-dark mb-3" style="max-width: 18rem;">';
    echo '<div class="card-header bg-secondary border-success"><b>'.$res['nom'].'</b></div>';
    echo '<div class="card-body text-success">';
    echo '<img src="../'.$res['img'].'" style="width: 150px; display: block;height: 150px; margin: 0 auto";>';
    echo '</div> <div class="card-footer bg-secondary border-success"><b>'.$res['prix'].'DH</b></div>';
    echo '</div></a></div>';
    $x++;
    if($x%4 === 0)
    {
        echo '<div class="col-md-1"></div>';
    }

               }
               }

}

                ?>
           </div>
       </div>


     
    

</section>




</body>
</html>