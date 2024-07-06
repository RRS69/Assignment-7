<?php 

function digital_theme_files(){
    wp_enqueue_style('style-css', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css'));


     // Enqueue Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap', array(), null);

  // Enqueue Icon Fonts
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '5.10.0');
  wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.4.1');

  // Enqueue Library CSS files
  wp_enqueue_style('animate-css', get_theme_file_uri('/lib/animate/animate.min.css'));
  wp_enqueue_style('owlcarousel-css', get_theme_file_uri('/lib/owlcarousel/assets/owl.carousel.min.css'));
  wp_enqueue_style('lightbox-css', get_theme_file_uri('/lib/lightbox/css/lightbox.min.css'));

  
 
  // Enqueue Library JS files
  wp_enqueue_script('owlcarousel-js', get_theme_file_uri('/lib/owlcarousel/owl.carousel.min.js'), array('jquery'), null, true);
  wp_enqueue_script('lightbox-js', get_theme_file_uri('/lib/lightbox/js/lightbox.min.js'), array('jquery'), null, true);


    
    wp_enqueue_script('main.js', get_theme_file_uri('/js/main.js'), array(), null, true);

  }
  add_action('wp_enqueue_scripts','digital_theme_files');

  
  
?>
