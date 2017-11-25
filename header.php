<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo ('name'); ?> ~ <?php the_title(); ?></title>
  <meta charset="<?php bloginfo ('charset'); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="pihkala-brand" <?php if (has_header_image()) { $bg = esc_url(get_header_image()); echo "style=\"background-image: url($bg);\""; } ?>>
    <div class="container-fluid">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <h1 class="display-3"><?php bloginfo('name'); ?></h1>
      </a>
      <p class="lead"><?php bloginfo('description'); ?></p>
    </div>
  </div>
  <nav class="navbar navbar-expand-sm navbar-light bg-pihkalamain">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <?php
      wp_nav_menu( array(
        'menu' => 'navbar-menu',
        'menu_class' => 'nav-menu',
        'container' => null
      ) );
      ?>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-lg-2 order-12 order-sm-1 bg-pihkalagray pt-2">
        <?php get_sidebar(); ?>
      </div>
      <div class="col order-2 pt-1">
