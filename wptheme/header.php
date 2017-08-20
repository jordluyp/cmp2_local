<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/assets/logo.jpeg">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css?2<?php echo time(); ?>">
   <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grid.css?2<?php echo time(); ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <?php wp_head(); ?>
  </head>
  <body>
  <div class="grid__wrapper">
  <div class="container">
  <div class="grid__row">
    <div class="grid__bp0-column-12">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><?php wp_nav_menu(
        array('theme_location' => 'primary-menu',
              'container_class' => 'navbar-nav mr-auto',
        )
      ); ?></li>
    </div>
  </div>
</nav>
</div>

<?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo '<img src="'.$image[0].'">';
?>




     
