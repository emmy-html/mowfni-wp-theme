<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<header id="header-nav">
  <img src="https://i.imgur.com/Kio5ah0.png" width="50" height="50">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</header>
<body id="body-adjust-main" <?php body_class(); ?>>
<div id="container">
  