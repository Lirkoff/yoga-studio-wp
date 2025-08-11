<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<header class="w-full bg-white/90 backdrop-blur sticky top-0 z-50 shadow-sm">
    <div class="mx-auto max-w-8xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo (left) -->
            <a href="<?php echo site_url();?>
            " class="flex items-center space-x-2">
                <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="Your logo" class="h-[250px] w-auto"/>
            </a>

            <!-- Navigation (right) -->
            <nav aria-label="Main" class="hidden md:block" id="main-menu">

<!--                --><?php
//                    wp_nav_menu( array(
//                       'theme_location' => 'headerMenuLocation',
//                    ));
//                ?>




                <ul class="flex items-center space-x-10 text-x1 font-medium">
                    <li><a class="px-1 py-1" href="">Classes</a></li>
                    <li><a class="px-1 py-1" href="#">Schedule</a></li>
                    <li><a class="px-1 py-1" href="#">Pricing</a></li>
                    <li <?php if (is_page('about-us')) echo 'class="text-sage"' ?>><a class="px-1 py-1" href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
                    <li><a class="px-1 py-1" href="#">Retreats</a></li>
                    <li><a class="px-1 py-1" href="#">Contact</a></li>
                </ul>


            </nav>





            <!-- Hamburger -->
            <button id="hamburger"
                    class="md:hidden inline-flex items-center justify-center rounded-md p-2 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    aria-label="Open main menu"
                    aria-expanded="false">
                <!-- Icon -->
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>
    </div>

    <nav id="mobileMenu"
         class="md:hidden fixed inset-0 z-40 bg-white/95 backdrop-blur overflow-y-auto hidden">
        <ul class="px-4 py-6 space-y-4 text-lg font-medium text-center">
            <li><a class="block" href="#">Classes</a></li>
            <li><a class="block" href="#">Schedule</a></li>
            <li><a class="block" href="#">Pricing</a></li>
            <li><a class="block" href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
            <li><a class="block" href="#">Retreats</a></li>
            <li><a class="block" href="#">Contact</a></li>
        </ul>
    </nav>


</header>





