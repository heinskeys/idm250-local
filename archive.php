<?php get_header(); ?>

<div class="archive-header">
    <h1><?php the_archive_title(); ?></h1>
</div>

<?php get_template_part('template-parts/posts-grid'); ?>

<?php get_footer(); ?>

