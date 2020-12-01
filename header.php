<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<script src="https://kit.fontawesome.com/33391c5587.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Poppins:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<header id="header-nav">
  <img src="https://i.imgur.com/Kio5ah0.png" width="50" height="50">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</header>
<body id="body-adjust-main" <?php body_class(); ?>>
<div id="container">
  