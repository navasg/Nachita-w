<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Nachita</title>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header id="home">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="main-brand__fixed">
          <div class="main-brand">
            <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
<img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg">
</a>
          </div>
        </div>
        <div class="main-brand__top">
          <div class="main-brand">
            <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
<img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg">
</a>
          </div>
        </div>
        <div class="main-brand brand-responsive">
          <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
<img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg">
</a>
        <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
      <span class="hamburger-box">
      <span class="hamburger-inner"></span>
</span>
</button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
            <li class="nav-item">
              <a class="nav-link active" data="offcanvas" href="<?php echo bloginfo('url'); ?>">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data="offcanvas" href="#">¿Quiénes Somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data="offcanvas" href="<?php echo bloginfo('url'); ?>/tienda">Tienda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data="offcanvas" href="#">Contáctanos</a>
            </li>
            <ul class="nav-list">
              <!-- <li class="nav-item">
                <a class="nav-link active" data="offcanvas" href="home">
<i class="fa fa-search"></i>
</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active" data="offcanvas" href="<?php echo bloginfo('url'); ?>/mi-cuenta">
<i class="fa fa-user-o"></i>
</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data="offcanvas" href="<?php echo bloginfo('url'); ?>/carrito">
<i class="fa fa-shopping-bag"></i>
</a>
              </li>
            </ul>
          </ul>
        </div>
      </div>
    </nav>
  </header>