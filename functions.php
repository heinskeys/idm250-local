<?php

// ! GENERAL FUNCTIONS

function kismet_styles(){
    wp_enqueue_style(
        'tailwind-css',
        'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css'
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
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined'
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

function kismet_allows_svgs($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}


// ! MENU FUNCTIONS

function kismet_register_menus() {
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'kismet'),
    ));
}

class kismet_walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        return;
    }
}

// ! CUSTOMIZER FUNCTIONS

function kismet_customize_register($wp_customize) {
    // *FOOTER SECTION
    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Editor', 'kismet'),
        'priority' => 160,
    ));

    $wp_customize->add_setting('footer_name', array(
        'default'   => 'currently NAME is...',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_name', array(
        'label'    => __('Name (Left Section)', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('footer_text1', array(
        'default'   => 'Instagram',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_text1', array(
        'label'    => __('Text for Link 1', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('footer_link1', array(
        'default'   => 'https://www.instagram.com/',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_link1', array(
        'label'    => __('insert link 1', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('footer_text2', array(
        'default'   => 'LinkedIn',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_text2', array(
        'label'    => __('Text for Link 2', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('footer_link2', array(
        'default'   => 'https://www.linkedin.com/',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_link2', array(
        'label'    => __('insert link 2', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('footer_text3', array(
        'default'   => 'Email',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_text3', array(
        'label'    => __('Text for Link 3', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('footer_link3', array(
        'default'   => 'mailto:',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_link3', array(
        'label'    => __('insert link 3', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('footer_right1', array(
        'default'   => '...but NAME would love to',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_right1', array(
        'label'    => __('Right Section Text 1', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('footer_right2', array(
        'default'   => 'be working with you!',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_right2', array(
        'label'    => __('Right Section Text 2', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('footer_right3', array(
        'default'   => 'reach out! let\'s connect!',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_right3', array(
        'label'    => __('Right Section Text 3', 'kismet'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));

    // * 404 PAGE SETTINGS
    $wp_customize->add_section('kismet_error_page_settings', array(
        'title'    => __('404 Page Editor', 'kismet'),
        'priority' => 30,
    ));

    // 404 Heading
    $wp_customize->add_setting('kismet_404_heading', array(
        'default'   => "You’ve escaped <span class='heading-emphasis'>Mack!</span>",
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('kismet_404_heading', array(
        'label'    => __('404 Heading', 'kismet'),
        'section'  => 'kismet_error_page_settings',
        'type'     => 'textarea',
    ));

    // 404 Subheading
    $wp_customize->add_setting('kismet_404_subheading', array(
        'default'   => "Come back. Now.",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kismet_404_subheading', array(
        'label'    => __('404 Subheading', 'kismet'),
        'section'  => 'kismet_error_page_settings',
        'type'     => 'text',
    ));

    // 404 Button Text
    $wp_customize->add_setting('kismet_404_button_text', array(
        'default'   => "Go Back",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kismet_404_button_text', array(
        'label'    => __('404 Button Text', 'kismet'),
        'section'  => 'kismet_error_page_settings',
        'type'     => 'text',
    ));

    // 404 Image Upload
    $wp_customize->add_setting('kismet_404_image', array(
        'default'   => 'https://placehold.co/440x554',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'kismet_404_image', array(
        'label'    => __('Upload a 404 Page Image', 'kismet'),
        'section'  => 'kismet_error_page_settings',
        'settings' => 'kismet_404_image',
    )));
}



// ! CUSTOM  CLASSES

function kismet_body_class($classes) {
    if (is_single()) {
        $classes[] = 'mx-auto px-12 lg:px-40'; // For single post pages
    } else {
        $classes[] = 'mx-12 lg:mx-24'; // Default for other pages
    }
    return $classes;
}

function add_image_wrapper_classes($content) {
    if (is_single() || is_page()) { // Check if it's a single post or page
        // Use regular expression to find all <img> tags and wrap them with the specified div
        $content = preg_replace('/<img(.*?)>/', '<div class="supplemental-graphic supplemental-large my-12"><img$1></div>', $content);
    }
    return $content;
}
add_filter('the_content', 'add_image_wrapper_classes');


function custom_video_classes_in_content($content) {
    // Apply to the content of the post/page (single or page view)
    if (is_single() || is_page()) {
        // Wrap iframe (such as Vimeo or YouTube) embeds in two divs
        $content = preg_replace('/<iframe(.*?)<\/iframe>/i', 
            '<div class="supplemental-graphic supplemental-large"><div>$0</div></div>', 
            $content);
        
        // Wrap video tags (self-hosted or embedded) in two divs
        $content = preg_replace('/<video(.*?)<\/video>/i', 
            '<div class="supplemental-graphic supplemental-large"><div>$0</div></div>', 
            $content);
    }
    return $content;
}

function register_customizer_settings($wp_customize) {
    // Add a section for the hero section
    $wp_customize->add_section('hero_section', array(
        'title'       => __('Hero Section', 'idm250-local'),
        'priority'    => 30,
    ));

    // Add setting for Mack's Name
    $wp_customize->add_setting('mack_name', array(
        'default' => 'Your Name',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('mack_name', array(
        'label'    => __('Mack\'s Name', 'idm250-local'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));

    // Add setting for Mack's Interest
    $wp_customize->add_setting('mack_interest', array(
        'default' => 'Your Area of Interest',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('mack_interest', array(
        'label'    => __('Mack\'s Interest', 'idm250-local'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));

    // Add setting for Hero Text
    $wp_customize->add_setting('hero_intro_text', array(
        'default' => 'Hi, I’m [mack_name], a third-year UX student interested in [mack_interest].',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('hero_intro_text', array(
        'label'    => __('Hero Intro Text', 'idm250-local'),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ));

    // Add the setting for the subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'   => 'View my work below!', // Default subtitle
        'transport' => 'refresh', // Refresh the page when updated
    ));

    // Add the control to change the subtitle
    $wp_customize->add_control('hero_subtitle_control', array(
        'label'    => __('Hero Subtitle', 'your_theme_textdomain'),
        'section'  => 'hero_section',
        'settings' => 'hero_subtitle',
        'type'     => 'text',
    ));

    // Add setting for Hero Image
    $wp_customize->add_setting('hero_image', array(
        'default' => get_template_directory_uri() . '/assets/images/default-hero.jpg', // Set default image
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'    => __('Hero Image', 'idm250-local'),
        'section'  => 'hero_section',
        'settings' => 'hero_image',
    )));
}

add_action('customize_register', 'register_customizer_settings');




// Hook the function into WordPress
add_filter('the_content', 'custom_video_classes_in_content');





add_action('wp_enqueue_scripts', 'kismet_styles');
add_action('wp_enqueue_scripts', 'kismet_scripts');
add_filter('upload_mimes', 'kismet_allows_svgs');
add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'kismet_register_menus');
add_action('customize_register', 'kismet_customize_register');
add_filter('body_class', 'kismet_body_class');
