<footer>
    <hr class="line-break h-0.5 w-auto my-16">
    <section class="footer-all flex flex-col gap-10 justify-between mt-20 mb-10 lg:flex-row">
        <div class="footer-left">
            <h4 class="mb-4"><?php echo get_theme_mod('footer_name', 'currently NAME is...'); ?></h4>
            <div class="footer-links flex flex-row gap-4">
                <a class="footer-tag" href="<?php echo esc_url(get_theme_mod('footer_link1', 'https://www.instagram.com/')); ?>" target="_blank"><?php echo esc_html(get_theme_mod('footer_text1', 'Instagram')); ?></a>
                <a class="footer-tag" href="<?php echo esc_url(get_theme_mod('footer_link2', 'https://www.linkedin.com/')); ?>" target="_blank"><?php echo esc_html(get_theme_mod('footer_text2', 'LinkedIn')); ?></a>
                <a class="footer-tag" href="<?php echo esc_url(get_theme_mod('footer_link3', 'mailto:')); ?>" target="_blank"><?php echo esc_html(get_theme_mod('footer_text3', 'Email')); ?></a>
            </div>
        </div>
        <div class="footer-right text-right">
            <h4><?php echo get_theme_mod('footer_right1', '...but NAME would love to'); ?></h4>
            <h4 class="mb-2"><?php echo get_theme_mod('footer_right2', 'be working with you!'); ?></h4>
            <p><?php echo get_theme_mod('footer_right3', 'reach out! let\'s connect!'); ?></p>
        </div>
    </section>

    <div class="footer-credits mb-10">
        <p>mack is mack is mack and mack made this site!</p>
    </div>
</footer>