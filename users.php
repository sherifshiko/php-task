<?php
session_start();

if (isset($_SESSION['user_error'])) {
  # code...
  $errors = $_SESSION['user_error'];
  unset($_SESSION['user_error']);
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

<div class="text-center ">
  <h1>sign up</h1>
</div>


<section class="container my-5">
<form action="/php-task/handel_users.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">username</label>
    <input name="username" type="text" class="form-control" id="exampleInputUsername">
    <div>
      <p class="alert alert-danger">
        <?php echo isset($errors['username'])?$errors['username']:''  ?>
      </p>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword" class="form-label">password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword">
    <div>
      <p class="alert alert-danger">
      <?php echo isset($errors['password'])?$errors['password']:''  ?>
      </p>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" >
    <div>
      <p class="alert alert-danger">
      <?php echo isset($errors['email'])?$errors['email']:''  ?>
      </p>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputphoneNumber." class="form-label">phone-number.</label>
    <input name="phone_number" type="number" class="form-control" id="exampleInputphoneNumber." >
    <div>
      <p class="alert alert-danger">
      <?php echo isset($errors['phone'])?$errors['phone']:''  ?>
      </p>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputFacebookAcountUrl" class="form-label">facebook account url</label>
    <input name="facebook_url" type="url" class="form-control" id="exampleInputFacebookAcountUrl" >
    <div>
      <p class="alert alert-danger">
      <?php echo isset($errors['facebook'])?$errors['facebook']:''  ?>
      </p>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputTwitterAcountUrl" class="form-label">twitter account url</label>
    <input name="twitter_url" type="url" class="form-control" id="exampleInputTwitterAcountUrl" >
    <div>
      <p class="alert alert-danger">
      <?php echo isset($errors['twitter'])?$errors['twitter']:''  ?>
      </p>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputInstagramAcountUrl" class="form-label">instagram account url</label>
    <input name="instagram_url" type="url" class="form-control" id="exampleInputInstagramAcountUrl" >
    <div>
      <p class="alert alert-danger">
      <?php echo isset($errors['instagram'])?$errors['instagram']:''  ?>
      </p>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>