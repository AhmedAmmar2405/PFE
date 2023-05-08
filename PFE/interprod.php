
<?php 
include '../db_conn.php';
$idproduit = $_GET['idProduit'];

// Récupérer les informations sur le produit
$getpro = mysqli_query($conn, "SELECT * FROM produit WHERE idProduit = '$idproduit'");
$produit = mysqli_fetch_assoc($getpro);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8" style="background-color: white;border-radius: 15px 15px 15px 15px;">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" style="border-radius: 30px 30px 30px 30px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo "../".$produit['img']; ?>" class="rounded" style="width: 500px; display: block;height: 350px; margin: 0 auto;">
                    </div>               
                </div>
            </div>
            <span><br></span>
            <div class="product-disc">
                <div class="row">
                    <div class="col-md-8">
                        <h1><?php echo $produit['nom']; ?></h1>
                        <p><?php echo $produit['description']; ?><br>ville : <?php echo $produit['ville']; ?></p>
                    </div>
                    <div class="col-md-2 ml-auto">
                        <p style="color:rgb(46, 107, 255);font-size: 25px;"><b><?php echo $produit['prix']; ?> $</b></p>
                    </div>
                </div><br>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                  <?php  $getvendeur=mysqli_query($conn,"SELECT * FROM user WHERE idUser = '{$produit['idUser']}'") ;
                         


                  $run=mysqli_fetch_assoc($getvendeur);
                  echo 'Vendeur :'.$run['nom'].' '.$run['prenom'].'<br>';
                  echo  'Numero : 0'.$run['tel'];



                  ?>
                    
                </div>
                <div class="col-md-4 ml-auto">
                    <p>contactez le vendeur :</p>
                    <a href=""><button class="btn btn-success" style="margin-bottom: 5px;">appel</button></a>
                    <a href="https://mail.google.com/"><button class="btn btn-dark"style="margin-bottom: 5px;">E-Mail</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="col-sm-2">
                <h1><center>Suggestions</center></h1>
                <a href="" class="btn text-dark btn-transparant">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-secondary border-success"><b>CPU i7-9700K</b></div>
                        <div class="card-body text-dark">
                            <img src="cpu2.png" style="width: 150px; display: block;height: 150px; margin: 0 auto";>
                        </div>
                        <div class="card-footer bg-light border-dark"><b>150$</b></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
