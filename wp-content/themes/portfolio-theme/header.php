<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Jonathan Dempsey</title>
<meta name="description" content="Jonathan's Portfolio Website">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php if( is_front_page() ) : ?>

    <nav id="navbar-main" class="navbar">

  <?php else : ?>

    <nav id="navbar-main" class="navbar navbar--fixed-top">

  <?php endif ; ?>

    <?php wp_nav_menu( array( 'menu' => 'main-left' ) ); ?>

      <a class="nav-logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets-prod/images/logo.png" class="logo"/></a>

    <?php wp_nav_menu( array( 'menu' => 'main-right' ) ); ?>

  </nav>
