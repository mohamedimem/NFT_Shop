<?php 

$servername ="localhost";
    $DBuser ="root";
    $DBpassword="";
    $DBname="ecommerce";
    $idcategorie=$_GET['idc'];
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    // 2 - creation de la requette
    $requette="DELETE  FROM categories WHERE id='$idcategorie'" ;
// 3- execution de la requette
    $resultat = $conn->query($requette);
    //4- resultat de la requette
    if ($resultat){
        header('location:liste.php');
    }
    
?>