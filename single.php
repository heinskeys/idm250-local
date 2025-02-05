<?php get_header(); ?>

<main class="post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail mt-2 mb-12">
                    <?php the_post_thumbnail(); ?>
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
            
            <div class="case-study-heading">

                <div class="heading my-3">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                </div>
                <div class="context my-3 lg:pl-6">
                    <div>
                        <p><strong>Role:</strong></p>
                        <span class="context-tag h-8 w-46 px-2">Author: <?php the_author(); ?></span>
                    </div>
                    <div>
                        <p><strong>Tools:</strong></p>
                        <div class="context-apps flex flex-row gap-1">
                            <span class="h-8 w-8"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/logos/figmalogo.svg" alt="Figma Logo"></span>
                            <span class="h-8 w-8"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/logos/illustratorlogo.svg" alt="Figma Logo"></span>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <p class="post-meta">Published on <?php the_date(); ?> in <?php the_category(', '); ?></p> -->
            
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
