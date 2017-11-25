<?php

function styleLoader() {
	wp_enqueue_style('pihkala-style', 'https://cdn.jsdelivr.net/gh/Tutrox/PihkalaStyles@1.0/build/pihkala.min.css', array(), null);
	wp_enqueue_script('pihkala-js', 'https://cdn.jsdelivr.net/combine/gh/Tutrox/jqc@1.0/jqc.js,npm/bootstrap@4.0.0-beta.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null);
  wp_enqueue_script('pihkala-fonts', 'https://use.edgefonts.net/source-sans-pro:n3,n4,i4,n6,n7.js', array(), null);
}
add_action('wp_enqueue_scripts', 'styleLoader');

function registerMenus() {
  register_nav_menu('navbar-menu',__( 'Navbar menu' ));
}
add_action('init', 'registerMenus');

function registerSidebar() {
    register_sidebar( array(
        'name' => 'Main sidebar',
        'id' => 'main-sidebar',
        'description' => 'Main sidebar on the left.',
        'before_widget' => '<div id="%1$s" class="widget flex-column %2$s">',
	      'after_widget' => '</div>',
	      'before_title' => '<h5 class="widgettitle font-weight-bold">',
	      'after_title' => '</h5>'
    ) );
}
add_action('widgets_init', 'registerSidebar');

add_theme_support('custom-header');

?>
