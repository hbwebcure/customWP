<?php // Load all scripts and stylesheets
function cbd_load_styles() {
    wp_enqueue_style( 'google-fonts' , 'https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');
    wp_enqueue_style( 'aos' , get_template_directory_uri()."/css/aos.css");
    wp_enqueue_style( 'slick-theme' , get_template_directory_uri()."/css/slick-theme.css");
    wp_enqueue_style( 'slick' , get_template_directory_uri()."/css/slick.css");
    wp_enqueue_style( 'bootstrap' , get_template_directory_uri()."/css/bootstrap.min.css");
    wp_enqueue_style( 'main-style' , get_template_directory_uri()."/css/style.css");
    wp_enqueue_style( 'style' , get_template_directory_uri()."/style.css");
}
add_action('wp_enqueue_scripts', 'cbd_load_styles');
function cbd_load_scripts() {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/javascript/bootstrap.bundle.min.js', array('jquery'), '', true  );
    wp_enqueue_script('slick', get_template_directory_uri() . '/javascript/slick.min.js', array('jquery'), '', true  );
    wp_enqueue_script('vivus', '//cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js', array('jquery'), '', true  );
    wp_enqueue_script('aos', get_template_directory_uri() . '/javascript/aos.js', array('jquery'), '', true  );
    wp_enqueue_script('script', get_template_directory_uri() . '/javascript/script.js', array('jquery'), '', true  );
    wp_add_inline_script( 'aos', 'setTimeout(() => {
        AOS.init({
        duration: 700
    });
    }, 15)' );
}
add_action('wp_enqueue_scripts', 'cbd_load_scripts');