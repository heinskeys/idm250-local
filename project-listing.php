<?php
/* Template Name: All Projects */
get_header();
?>

<div class="archive-header">
    <h1>All Projects</h1>
</div>

<?php
// Set up the pagination for the query
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Set up the WP_Query to fetch posts of the 'projects' post type
$args = [
    'posts_per_page' => 10,         // Number of posts to display per page
    'paged' => $paged,              // Handle pagination
];

$projectListing = new WP_Query($args);

// Loop through the posts
if ($projectListing->have_posts()) :
    echo '<section class="case-studies grid grid-cols-1 gap-10 my-20 justify-between lg:grid-cols-2">'; // Adjust grid for your layout
    while ($projectListing->have_posts()) : $projectListing->the_post();
        ?>
        <div class="case-study-card my-2">
            <div class="card-image h-auto">
                <a href="<?php the_permalink(); ?>">
                    <div class="card-dropshadow"></div>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </a>
            </div>
            <div class="case-study-card-content pl-5 pr-3 my-5">
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                <div class="case-study-card-tags flex flex-row items-center gap-2 h-6 my-2.5">
                    <!-- Add custom tags dynamically if needed -->
                    <span class="descriptive-tag h-8 w-auto px-2 pt-2.5 leading-none">
                        <?php the_category(', '); ?>
                    </span>
                </div>
            </div>
        </div>
        <?php
    endwhile;
    echo '</section>';

    // Pagination Links
    echo '<div class="pagination">';
    echo paginate_links([
        'total' => $projectListing->max_num_pages
    ]);
    echo '</div>';
else :
    echo '<p>No projects found.</p>';
endif;

// Reset the post data
wp_reset_postdata();
?>

<?php get_footer(); ?>
