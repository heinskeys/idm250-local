<?php

function kismet_styles(){
    wp_enqueue_style(
        'tailwind-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'aos-css',
        'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css'
    );
    
    wp_enqueue_style(
        'kismet-base-css',
        get_template_directory_uri() . '/dist/css/main.css',
        [],
        filemtime(get_template_directory() . '/dist/css/main.css')
    );

    wp_enqueue_style(
        'kismet-fonts',
        'https://use.typekit.net/quy1xra.css'
    );

    wp_enqueue_style(
        'material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet'
    );

}

function kismet_scripts(){
    wp_enqueue_script(
        'kismet-base-script',
        get_template_directory_uri() . '/dist/js/main.js',
        [],
        filemtime(get_template_directory() . '/dist/js/main.js'),
        true
    );

    wp_enqueue_script(
        'aos-script',
        'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js',
        [],
        true
    );
}

add_action('kismet_styles', 'kismet_scripts');