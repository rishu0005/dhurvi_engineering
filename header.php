<?php
$current_page = basename($_SERVER['REQUEST_URI']); // gets the current file name or URI segment
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Druvi Engineering</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FOnt Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

  <!-- StyleSheet -->
	<link href="css/style.css" rel="stylesheet">

  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">




</head>
<nav class="navbar  navbar-expand-lg">
  <div class="container">
    <!-- <div class="container"></div> -->
    <a class="navbar-brand me-5" href="index.php">
      <img loading="lazy" class="logo_image" src="./img/logo.png"  alt="logo" width="183" height="49">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    

    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link nav-home me-3 fs-5 <?php if($current_page == 'index.php'){echo 'active';} ?>  text-dark " href="index.php">Home <span class="under-line"></span> </a>
      </li>
      <li class="nav-item <?php if($current_page == 'about.php'){echo 'active';} ?>">
        <a class="nav-link me-3 nav-about  fs-5   text-dark" href="about.php">About Us<span class="under-line"></span></a>
      </li>
      <li class="nav-item <?php if($current_page == 'product.php'){echo 'active';} ?>">
        <a class="nav-link me-3 nav-product   fs-5   text-dark" href="product.php">Products <span class="under-line"></span></a>
      </li>
      <li class="nav-item <?php if($current_page == 'machinery.php'){echo 'active';} ?>">
        <a class="nav-link me-3  fs-5 machinery  text-dark" href="machinery.php">Machinery <span class="under-line"></span></a>
      </li>
      <li class="nav-item <?php if($current_page == 'contact.php'){echo 'active';} ?>">
        <a class="nav-link me-3  fs-5 contact  text-dark" href="contact.php">Contacts <span class="under-line"></span></a>
      </li> 
    </ul>

     	<!-- Mobile Number -->
       <div class="d-flex ms-auto">
        <span class="navbar-text  text-dark">
          <i class="fa-solid fa-phone-volume"></i> <a href="tel:+917507483383" class="text-dark fs-5 text-decoration-none  ">+91 7507483383</a> / <a href="tel:+91 9325682260" class="text-dark text-decoration-none fs-5"> 9325682260</a>
        </span>
      </div>
  </div>

    </div>

  
</nav>
<body>
    
