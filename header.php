<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
  <script async defer data-website-id="82ab9a5a-56e1-4a9c-aaba-16810b74aa9c" data-domains="www.pihkala.info" src="https://tra.al-firman.com/umami.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="pihkala-brand" <?php if (has_header_image()) {
    $bg = esc_url(get_header_image());
    echo "style=\"background-image: url($bg);\"";
  } ?>>
    <div class="container-fluid">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <h1 class="display-3"><?php bloginfo('name'); ?></h1>
      </a>
      <p class="lead"><?php bloginfo('description'); ?></p>
    </div>
  </div>
  <nav class="navbar navbar-expand-sm navbar-light bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Avaa kielivalikko">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <?php wp_nav_menu([
        'menu' => 'navbar-menu',
        'menu_class' => 'nav-menu',
        'container' => null,
      ]); ?>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-lg-2 order-3 order-sm-1 bg-light pt-2 d-print-none">
        <?php get_sidebar(); ?>
      </div>
      <div class="col order-2 p-4 px-sm-5 py-sm-4 shadow-sm">
