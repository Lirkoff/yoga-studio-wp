<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="w-full bg-white/90 backdrop-blur sticky top-0 z-50 shadow-sm">
    <div class="mx-auto max-w-8xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo (left) -->
            <a href="/" class="flex items-center space-x-2">
                <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="Your logo" class="h-[250px] w-auto"/>
            </a>

            <!-- Navigation (right) -->
            <nav aria-label="Main" class="hidden md:block" id="main-menu">
                <ul class="flex items-center space-x-10 text-x1 font-medium">
                    <li><a class="px-1 py-1" href="#">Classes</a></li>
                    <li><a class="px-1 py-1" href="#">Schedule</a></li>
                    <li><a class="px-1 py-1" href="#">Pricing</a></li>
                    <li><a class="px-1 py-1" href="#">About</a></li>
                    <li><a class="px-1 py-1" href="#">Retreats</a></li>
                    <li><a class="px-1 py-1" href="#">Contact</a></li>
                </ul>
            </nav>


        </div>
    </div>

</header>

