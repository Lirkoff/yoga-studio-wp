<?php get_header(); ?>

    <div>
        <h1>Welcome to our blog!</h1>

        <div>
            <p>
                Keep up with the latest news and updates from our blog.
            </p>
        </div>
    </div>

    <div>
        <?php
            while (have_posts()) {
                the_post(); ?>
                    <div class="post-item">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <div>
                            <?php the_excerpt(); ?>
                            <p><a href="<?php the_permalink(); ?>">Continue reading...</a></p>

                        </div>
                    </div>
            <?php }
        ?>

    </div>

    <?php get_footer();
 ?>
