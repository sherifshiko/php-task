<?php
session_start();
if (isset($_SESSION['validation_error'])) {
  # code...
  $errors = $_SESSION['validation_error'];
  unset($_SESSION['validation_error']);
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
  

<section class="d-flex justify-content-center my-5 ">

<form action="/php-task/handel_account.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
    <div>
      <p class="alert alert-danger">
        <?php echo isset($errors['email'])?$errors['email']:'' ?>
      </p>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <div>
      <p class="alert alert-danger">
        <?php echo isset($errors['password'])?$errors['password']:''   ?>
      </p>
    </div>
  </div>
  <button type="submit"  class="btn btn-primary">Submit</button>
  <a type="button" href="/php-task/users.php"  class="btn btn-primary">sign up</a>
</form>
    
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>