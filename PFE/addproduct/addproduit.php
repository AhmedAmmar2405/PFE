<?php 
session_start();
include '../db_conn.php';

if(isset($_POST['submit'])){
  $prix=($_POST['prix']);
  $nom=($_POST['nom']);
  $description=($_POST['description']);
  $categorie=($_POST['categorie']);
  $image=$_POST['photos'];
  $ville=($_POST['ville']);

  $sql= "select idCat from categorie where nom='$categorie'";
  $idcat = mysqli_query($conn,$sql);
  
    if(empty($nom)){
    header("location:index.php?error=nom de produit requis");
  }elseif (empty($prix)) {
    header("location:index.php?error=Prix requis");
  }elseif (empty($description)) {
    header("location:index.php?error=Description requis");
  }elseif (empty($categorie)) {
    header("location:index.php?error=Categorie requis");
  }elseif (empty($image)) {
    header("location:index.php?error=Ajouter des photos");
  }elseif (empty($ville)) {
    header("location:index.php?error=Ville non saisie");
  }else{
     $add_prod = "INSERT INTO produit (nom,description,prix,idcat,img,ville) VALUES ( '$nom'  , '$description' , '$prix', '$idcat' , '$image','ville' )";
  mysqli_query($conn,$add_user);
  echo '<alert>Produit ajouter</alert>';

  }
}
 ?>