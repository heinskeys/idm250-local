<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>        
        <?php
        wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>
    <?php wp_head(); ?>
</head>

<body class=" mx-12 lg:mx-24" <?php body_class(); ?>>
    <header>
        <!-- Desktop Menu -->
        <nav class="navigation hidden lg:flex justify-end items-center gap-4 relative">
            <div class="nav-links lg:gap-8 my-10">
                <a href="#">work</a>
                <a href="#">resume</a>
                <a href="#">about</a>
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
            <a href="#">work</a>
            <a href="#">resume</a>
            <a href="#">about</a>
            <button id="close-button" class="absolute top-2 right-12">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    </header>
