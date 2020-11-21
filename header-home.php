<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<script src="https://kit.fontawesome.com/33391c5587.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Poppins:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<div class="topbar" id="home-topbar">
  During this national emergency, we need your help the most. Learn how you can <a href="/get-involved">get involved</a> today!
  <button onclick="closeTopbar()">X</button>
</div>
<section id="popover">
      <div class="popover-content fade-in sticky">
        <div class="content-wrapper">
            <button onclick="closePopover()">X</button>
        <h1>Help Homebound Seniors</h1>
        <h2>During COVID-19.</h2>
        <div class="donation-form-container">
          
          <p>$</p> <input class="donation-form-filler">
          </input> <p>USD/MO</p>
          <a href="https://donorbox.org/make-sure-no-older-adult-goes-hungry?default_interval=o&amount=30" class="donate-button" target="_blank">Donate</a>
        </div>
      </div>
      </div>  
    </section>
<header id="header-nav">
  <img src="https://i.imgur.com/Kio5ah0.png" width="50" height="50">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</header>
<body id="body-adjust" <?php body_class(); ?>>
<div id="container">
  