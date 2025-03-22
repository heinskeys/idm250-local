<?php get_header(); ?>

<main class="post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <div class="post-content">
                <?php 
                    // Get the post content
                    $content = get_the_content();

                    // Find all images in content
                    $content = preg_replace_callback('/<img(.*?)>/', function ($matches) {
                        // Include drop shadow and image without speech bubbles
                        return '<div class="about-image flex justify-center items-center h-auto">
                                    <div class="about-dropshadow"></div>
                                    <img' . $matches[1] . '>
                                </div>';
                    }, $content);

                    echo $content;
                ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>




