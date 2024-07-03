<?php
function my_theme_enqueue_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);

    // Enqueue other libraries
    wp_enqueue_script('wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array(), null, true);

    // Enqueue the main template JavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
?>