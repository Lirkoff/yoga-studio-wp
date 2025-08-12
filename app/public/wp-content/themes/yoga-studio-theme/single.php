<?php
get_header();
while (have_posts()) {
    the_post(); ?>
        <div>
            <div>
                <h1><?php the_title(); ?></h1>

                <div>
                    <p><?php the_content(); ?>
                    </p>
                </div>
            </div>
        </div>

<?php }
get_footer();
?>
