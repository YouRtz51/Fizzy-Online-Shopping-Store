<!DOCTYPE html>
<html>
<?php include 'includes/connection.php' ?>
<?php include 'includes/functions.php' ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fizzy | Shop Like Never Before</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox-->
  <link rel="stylesheet" href="assets/vendor/lightbox2/css/lightbox.min.css">
  <!-- Range slider-->
  <link rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css">
  <!-- Bootstrap select-->
  <link rel="stylesheet" href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- Owl Carousel-->
  <link rel="stylesheet" href="assets/vendor/owl.carousel2/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendor/owl.carousel2/assets/owl.theme.default.css">
  <!-- Google fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="assets/img/favicon.png">
</head>

<body>
  <div class="page-holder">
    <!-- navbar-->
    <header class="bg-white header">
      <div class="container px-0 px-lg-3">
        <nav class="py-3 navbar navbar-expand-lg navbar-light px-lg-0"><a class="navbar-brand" href="index.php"><span class="font-weight-bold text-uppercase text-dark">Fizzy</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mr-auto navbar-nav">
              <li class="nav-item">
                <!-- Link--><a class="nav-link active" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link" href="detail.php">Product detail</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="mt-3 dropdown-menu" aria-labelledby="pagesDropdown"><a class="border-0 dropdown-item transition-link" href="home.php">Homepage</a><a class="border-0 dropdown-item transition-link" href="shop.php">Category</a><a class="border-0 dropdown-item transition-link" href="detail.php">Product detail</a><a class="border-0 dropdown-item transition-link" href="cart.php">Shopping cart</a><a class="border-0 dropdown-item transition-link" href="checkout.php">Checkout</a></div>
              </li>
            </ul>
            <ul class="ml-auto navbar-nav">
              <li class="nav-item"><a class="nav-link" href="cart.php"> <i class="mr-1 fas fa-dolly-flatbed text-gray"></i>Cart<small class="text-gray">(2)</small></a></li>
              <li class="nav-item"><a class="nav-link" href="#"> <i class="mr-1 far fa-heart"></i><small class="text-gray"> (0)</small></a></li>
              <li class="nav-item"><a class="nav-link" href="#"> <i class="mr-1 fas fa-user-alt text-gray"></i>Login</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>