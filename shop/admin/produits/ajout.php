<?php 
$nom= $_POST['nom'];
$description=$_POST['description'];

$prix=$_POST['prix'];

$createur=$_POST['createur'];

$categorie=$_POST['categorie'];

$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
 $image=$_FILES["image"]["name"];
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
$requette="INSERT INTO produits(nom,description,prix,image,categorie) VALUES ('$nom,$description,$prix,$image,$categorie"
$resultat=$conn->query($requette);
if($resultat){
    header('location:liste.php?ajout=ok')
}
?>