<?php

$products=[
    'product_1'=>[
        'price' => 109.95,
        'img'=> '/php-task/images/1.jpg',
        'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
    ],
    'product_2'=>[
        'price' => 22.3,
        'img'=> '/php-task/images/2.jpg',
        'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
    ],
    'product_3'=>[
        'price' => 55.99,
        'img'=>'/php-task/images/3.jpg' ,
        'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
    ],
    'product_4'=>[
        'price' => 15.99,
        'img'=>'/php-task/images/4.jpg' ,
        'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
    ],
    'product_5'=>[
        'price' => 695,
        'img'=>'/php-task/images/5.jpg',
        'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
    ],
    'product_6'=>[
        'price' => 168,
        'img'=>'/php-task/images/6.jpg' ,
        'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
    ]
    ];

    // foreach ($products as $product => $value) {
    //     # code...
    //     echo "$product : $value[img] <br>";
    // }

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
    <body class="bg-dark">

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
        
            <h1 class="text-center text-light">products</h1>
       

            <section class="my-5">
                <div class="row gy-3">
                <?php 
        foreach ($products as $product => $value) { 
             
            echo "<div class='col-md-3'>
                        <div class='card' style='width: 18rem;'>
                        <img src=' $value[img]' class='card-img-top' width='200px'>
                        <div class='card-body'>
                            <h5 class='card-title text-danger'> $value[price]</h5>
                            <p class='card-text'> $value[desc]</p>
                            
                        </div>
                        </div>
                    </div>";
          
        }
            ?>
                    
                </div>
            </section>
        
            
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
    </html>