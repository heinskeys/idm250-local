<header>
    <!-- Desktop Menu -->
    <nav class="navigation hidden lg:flex justify-end items-center gap-4 relative">
        <div class="nav-links lg:gap-8 my-10">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'      => false,
                'menu_class'     => 'flex gap-4 lg:gap-8',
                'fallback_cb'    => 'wp_page_menu', // Provides a fallback menu
                'walker'         => new kismet_walker(), // Custom menu styling
            ));
            ?>
        </div>
    </nav>

    <!-- Hamburger Icon -->
    <div class="flex justify-end my-10 lg:hidden">
        <button id="menu-button">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>

    <!-- Fullscreen Overlay (Mobile Menu) -->
    <div id="overlay" class="nav-links fixed inset-0 flex flex-col items-center justify-center space-y-8 hidden">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'container'      => false,
            'menu_class'     => 'flex gap-4 lg:gap-8',
            'fallback_cb'    => 'wp_page_menu',
            'walker'         => new kismet_walker(),
        ));
        ?>
        <button id="close-button" class="absolute top-2 right-12">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
</header>
