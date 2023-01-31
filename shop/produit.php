<?php
include 'inc/fonctions.php';
$categories=getAllCategories();


if(isset($_GET['id'])) { // I implemented all these codes but still....
    $produit= getProduitById($_GET['id']);
   // Database Classes Fetches user info from database
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
include 'inc/header.php';

?>


      <div class="row col-12 mt-4">  <!-- margin top 4-->
    


      <div class="card col-8 offset-2">
      <img src="images/<?php echo $produit['image'];?>" class="card-img-top" alt="...">
      <div class="card-body">
    <h5 class="card-title" name="nom"><?php echo $produit['nom'] ?> </h5>
        <p class="card-text"><?php echo $produit['description'] ?> </p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item" name="prix">Prix: <?php echo $produit['prix'] ?> $</li>
        <li class="list-group-item"> Artist :<?php echo $produit['createur'] ?></li>
       
        <form action="action/commander.php" method="post">
        <input type="hidden" value="<?php echo $produit['id'] ?>" name="produit">
        <input type="hidden" value="<?php echo $produit['prix'] ?>" name="prix">
        <button type="submit" class="btn btn-primary">commmander</button>
        </form>
      </ul>
      
    </div>

     
  </div>
  

  <?php
     include "inc/footer.php"; 
     ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>