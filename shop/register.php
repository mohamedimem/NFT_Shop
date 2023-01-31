<?php
include 'inc/fonctions.php';
$showRegistrationAlert = 0;
$categories=getAllCategories();

if (!empty($_POST)){//click sur button sumbit
  
  if (AddVisiteur($_POST)){
    $showRegistrationAlert=1;
  }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css" integrity="sha512-/D4S05MnQx/q7V0+15CCVZIeJcV+Z+ejL1ZgkAcXE1KZxTE4cYDvu+Fz+cQO9GopKrDzMNNgGK+dbuqza54jgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
<body>
<?php 
include 'inc/header.php';
    ?>

<!-- fin navbar-->
<h1 class="text-center">Register</h1>

  <div class="col-12 p-5">
    <form action="register.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom </label>
          <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text"  name="prenom" class="form-control" >
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Telephone</label>
            <input type="text"   name="telephone" class="form-control"  >
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text"   name="email" class="form-control"  >
            <div     class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password"  name="mp" class="form-control" id="exampleInputPassword1">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>    
  
<!-- footer-->
<?php
     include "inc/footer.php"; 
     ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js" integrity="sha512-jQxNe7fqaqehR3t/JfoxC8y2dwkEIL/7a6JWbs6sQdSCI/6Kd0t2okI9nhuKeSUgM5JDTDgdUzLzSPovB2lOBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php

if ($showRegistrationAlert==1){
  print "
  <script>
  Swal.fire({
    icon: 'success',
    title: 'Creation de compte avec',
    text: 'Success',
    confirmButtonText:'OK',
    timer:2000
  })
  </script>
  ";
}


?>

</html>