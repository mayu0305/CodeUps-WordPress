<?php

function custom_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.1/swiper-bundle.min.css');

    // Theme stylesheet
    wp_enqueue_style('theme-style', get_theme_file_uri('assets/css/style.css'));

    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8.3.1/swiper-bundle.min.js', array('jquery'), null, true);

    // Inview JS
    wp_enqueue_script('inview-js', get_theme_file_uri('assets/js/jquery.inview.min.js'), array('jquery'), null, true);

    // Custom script
    wp_enqueue_script('custom-script', get_theme_file_uri('assets/js/script.js'), array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

