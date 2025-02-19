<?php get_header(); ?>

<section class="w-full flex justify-center items-center my-20">
    <div class="w-full max-w-7xl flex flex-col md:flex-row justify-between items-center gap-20">
        <div class="flex flex-col justify-start items-start gap-10">
            <div class="flex flex-col justify-start items-start gap-4">
                <h1><?php echo wp_kses_post(get_theme_mod('kismet_404_heading', "You’ve escaped <span class='heading-emphasis'>Mack!</span>")); ?></h1>
                <h1 class="heading-subtitle"><?php echo esc_html(get_theme_mod('kismet_404_subheading', "Come back. Now.")); ?></h1>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="main-button justify-center items-center gap-2.5">
                <div><?php echo esc_html(get_theme_mod('kismet_404_button_text', "Go Back")); ?></div>
            </a>
        </div>
        <div class="flex justify-center w-full md:w-auto">
            <?php 
                $error_image = get_theme_mod('kismet_404_image', 'https://placehold.co/440x554'); 
            ?>
            <img class="max-w-md h-auto" src="<?php echo esc_url($error_image); ?>" alt="404 Image" />
        </div>
    </div>
</section>

<?php get_footer(); ?>
