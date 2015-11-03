<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<title><?php wp_title( ' | ', true, 'right' ); ?><?php bloginfo( 'sitename' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 8]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 8]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body <?php body_class('fs-grid fs-grid-fluid'); ?>>
<div id="wrapper">
<div id="wrapper-inner">

<?php if(is_front_page()): include_once locate_template('parts/home-carousel.php' ); endif; ?>

<header id="header" class="<?php if(is_front_page()): ?>fs-grid  home<?php else: echo ' fs-grid '; endif; ?>"><div>
  <div class="fs-row">
    <menu id="header-mobile" class="fs-cell fs-lg-hide fs-md-2 fs-sm-1 fs-right">
      <a data-swap-target=".mobile-menu" class="mobile-toggle btn btn-hamburg btn-nav btn-first"><span class="icon"></span></a>
    </menu>
    <menu id="header-navigation" class="fs-cell fs-lg-10 fs-md-hide fs-sm-hide">
      <?php echo wp_nav_menu( $mainMenu ); ?>
    </menu>
    <?php if(is_front_page()): ?>
    <menu id="header-social" class="fs-cell fs-lg-2 fs-md-hide fs-sm-hide text-right">
      <a target="_blank" href="https://www.facebook.com/cciteam" class="btn btn-nav ss-social ss-facebook"></a>
      <a target="_blank" href="https://www.linkedin.com/company/2086741" class="btn btn-nav ss-social ss-linkedin"></a>
      <a target="_blank" href="https://instagram.com/cciteam" class="btn btn-nav ss-social ss-instagram"></a>
    </menu>
    <?php endif; ?>
    <?php if(!is_front_page()): ?>
    <menu id="header-main" class="fs-cell fs-lg-2 fs-md-4 fs-sm-2 text-right">
      <a href="/" id="header--logo" class="mobile-menu btn btn-logo btn-nav btn-last">CC</a>
    </menu>
    <?php endif; ?>
  </div>
</div></header>

<div id="content-wrapper" class='fs-grid fs-grid-fluid'>
