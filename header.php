<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip n Tour</title>

     <!-- Font Awesome Link -->
     <script src="https://kit.fontawesome.com/c339ed87f2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">

     <!-- Custom fonts for this template -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter&family=Mulish:wght@200;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

     <!-- Custom styles for this template -->
     <?php wp_head(); ?>
     
     <style type="text/css" media="screen">
	html { margin-top: 0px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0px !important; }
	}
</style>

<!-- Bootstrap core JavaScript -->
<!-- <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
<script src="./wp-content/themes/usama-wordpress-theme/assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> -->

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css"> -->
  
  
</head>
<body>

  <header>
  <?php $head = get_field('head'); ?>
    <div class="head">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand mx-auto" href="#">
            <img src="<?php echo get_template_directory_uri(). '/assets/img/logo.svg'; ?>" alt="logo-pic" class="img-responsive logo">

                  <!--  -->
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <?php
            wp_nav_menu(array('theme_location'=> 'top_menu',
            'menu' => 'main-menu',
            'menu_class' => 'navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll',
            'container' => 'ul',
            'li_class' => 'nav-item',
            'a_class' => 'nav-link',
            'acive_class' => 'active'
            ));
          ?>
                <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#dest">Destinations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Partner</a>
                  </li>
                </ul> -->
        </div>
      </div>
    </nav>

    </div>
  </header>