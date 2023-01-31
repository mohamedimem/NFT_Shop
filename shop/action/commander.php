<?php 
session_start();
$produit=$_POST['produit'];
$nom=$_SESSION['nom'];
$prix=$_POST['prix'];
$servername ="localhost";
    $DBuser ="root";
    $DBpassword="";
    $DBname="ecommerce";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    // 2 - creation de la requette
    $requette="INSERT INTO commandes(produit,acheteur,prix) VALUES ('$produit','$nom',$prix)";
// 3- execution de la requette
    $resultat = $conn->query($requette);
    //4- resultat de la requette
    if ($resultat){
        header('location:../index.php');
    }
    
?>