<div class="case-study-heading">
    <div class="heading my-3">
        <h1 class="post-title"><?php the_title(); ?></h1>
    </div>

    <div class="context my-3 lg:pl-6">
        <div>
            <p><strong>Role:</strong></p>
            <span class="context-tag h-8 w-46 px-2">
                <?php
                    $role = get_post_meta(get_the_ID(), 'role', true);
                    echo $role ? esc_html($role) : 'Not specified';
                ?>
            </span>
        </div>
        
        <div>
            <p><strong>Tools:</strong></p>
            <div class="context-apps flex flex-row gap-1">
                <?php
                    $context_apps = get_post_meta(get_the_ID(), 'context_apps', true);
                    if ($context_apps) {
                        $apps = explode(',', $context_apps);
                        foreach ($apps as $app) {
                            echo '<span class="h-8 w-8"><img src="' . esc_url(get_template_directory_uri()) . '/dist/assets/logos/' . esc_attr(trim($app)) . '.svg" alt="' . esc_attr(trim($app)) . ' logo"></span>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>