<?php get_header(); ?>

<main class="post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
        <?php if (has_post_thumbnail()) : ?>
            <div class="full-width case-study-image mt-2 mb-12">
                <?php the_post_thumbnail('full'); // You can change the size if needed ?>
            </div>
        <?php endif; ?>

            <div>
                    <span class="descriptive-tag h-8 w-auto px-2 py-2 my-12 leading-none">
                        <?php 
                        $post_tags = get_the_tags(); 
                        echo $post_tags ? esc_html($post_tags[0]->name) : 'Case Study';
                        ?>
                    </span>
            </div>
            
            <?php get_template_part('template-parts/post-meta'); ?>
            
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            
            <div class="post-tags">
                <?php the_tags('Tags: ', ', '); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
