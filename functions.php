<?php
function styleLoader()
{
  wp_enqueue_style(
    'pihkala-style',
    'https://cdn.jsdelivr.net/gh/Tutrox/PihkalaStyles@1.1.0/build/pihkala.css',
    [],
    null
  );
  wp_enqueue_script(
    'pihkala-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js',
    ['jquery'],
    null
  );
  wp_enqueue_script(
    'pihkala-fonts',
    'https://use.edgefonts.net/source-sans-pro:n3,n4,i4,n6,n7.js',
    [],
    null
  );
}
add_action('wp_enqueue_scripts', 'styleLoader');

function registerMenus()
{
  register_nav_menu('navbar-menu', __('Navbar menu'));
}
add_action('init', 'registerMenus');

function registerSidebar()
{
  register_sidebar([
    'name' => 'Main sidebar',
    'id' => 'main-sidebar',
    'description' => 'Main sidebar on the left.',
    'before_widget' => '<div id="%1$s" class="widget flex-column %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widgettitle font-weight-bold">',
    'after_title' => '</h5>',
  ]);
}
add_action('widgets_init', 'registerSidebar');

$customHeaderSettings = [
  'flex-width' => true,
  'width' => 280,
  'flex-height' => true,
  'height' => 210,
];

add_theme_support('custom-header', $customHeaderSettings);
?>
