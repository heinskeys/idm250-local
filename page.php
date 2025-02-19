<?php get_header(); ?>

<main class="post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <div class="post-content">
                <?php 
                    // Get custom field values
                    $show_bubbles = get_post_meta(get_the_ID(), 'show_speech_bubbles', true);
                    $bubble_top = get_post_meta(get_the_ID(), 'bubble_text_top', true);
                    $bubble_middle = get_post_meta(get_the_ID(), 'bubble_text_middle', true);
                    $bubble_bottom = get_post_meta(get_the_ID(), 'bubble_text_bottom', true);

                    // Find all images in content
                    $content = get_the_content();
                    $content = preg_replace_callback('/<img(.*?)>/', function ($matches) use ($show_bubbles, $bubble_top, $bubble_middle, $bubble_bottom) {
                        // Always include drop shadow
                        $bubbles_html = '<div class="about-dropshadow"></div>';
                        
                        // Add speech bubbles if enabled
                        if ($show_bubbles) {
                            $bubbles_html .= '
                                <div class="speech-bubble about-bubble-top">
                                    <span>' . esc_html($bubble_top) . '</span>
                                </div>
                                <div class="speech-bubble about-bubble-middle">
                                    <span>' . esc_html($bubble_middle) . '</span>
                                </div>
                                <div class="speech-bubble about-bubble-bottom">
                                    <span>' . esc_html($bubble_bottom) . '</span>
                                </div>';
                        }
                        
                        return '<div class="about-image flex justify-center items-center h-auto">'
                                . $bubbles_html . 
                                '<img' . $matches[1] . '>
                            </div>';
                    }, $content);

                    echo $content;
                ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

