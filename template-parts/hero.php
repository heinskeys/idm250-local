<section class="mack-hero">
    <div class="hero-text">
        <h1>
            <?php
                // Get dynamic text from the Customizer
                $mack_name = get_theme_mod('mack_name', 'Your Name');
                $mack_interest = get_theme_mod('mack_interest', 'Your Area of Interest');
                $hero_intro_text = get_theme_mod('hero_intro_text', 'Hi, I’m [mack_name], a third-year UX student interested in [mack_interest].');

                // Replace placeholders in the intro text
                $hero_intro_text = str_replace('[mack_name]', '<i class="heading-tag-mack">' . esc_html($mack_name) . '</i>', $hero_intro_text);
                $hero_intro_text = str_replace('[mack_interest]', '<i class="heading-tag-visual">' . esc_html($mack_interest) . '</i>', $hero_intro_text);

                // Output the final dynamic intro text
                echo wp_kses_post($hero_intro_text);
            ?>
        </h1>

        <!-- Subtitle -->
        <h2 class="pt-16 heading-subtitle">
            <?php 
                // Check if the subtitle is set in the customizer
                echo get_theme_mod('hero_subtitle', 'View my work below!');
            ?>
        </h2>
    </div>
    <div class="hero-img">
        <!-- Display the selected hero image from the Customizer -->
        <img src="<?php echo esc_url(get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/default-hero.jpg')); ?>" alt="Hero Image">
    </div>
</section>
<hr class="line-break h-0.5 w-auto my-16">