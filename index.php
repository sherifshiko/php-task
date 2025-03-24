<?php
session_start();

if (isset($_SESSION['save_successively'])) {
  # code...
  $name_user = $_SESSION['save_successively'];
  unset($_SESSION['save_successively']);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-secondary ">
  <div class="container-fluid ">
    <a class="navbar-brand text-light" href="#">Ecommerce website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav ms-auto px-3 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/php-task/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/php-task/all-products.php">all products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/php-task/account.php">account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/php-task/users.php">sign up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="header d-flex justify-content-center align-items-center">



<h1 class="text-primary size"><?php echo isset($name_user)?$name_user:'' ?> ,welcome to our store</h1>


</section>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>