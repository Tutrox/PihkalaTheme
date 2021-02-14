<?php
function styleLoader()
{
  wp_enqueue_style(
    'pihkala-style',
    'https://cdn.jsdelivr.net/gh/Tutrox/PihkalaStyles@1.2.0/build/pihkala.css',
    [],
    null
  );
  wp_enqueue_style(
    'pihkala-fonts',
    'https://tutrox.com/include',
    [],
    null
  );
  wp_enqueue_script(
    'pihkala-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js',
    ['jquery'],
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
