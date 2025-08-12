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
            <h2><?php the_title(); ?></h2>

            <div>
                <p>Posted by <?php the_author_posts_link() ?> on <?php the_date(); ?> in <?php the_category(', ') ?></p>
            </div>

            <div>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Continue reading...</a></p>

            </div>
        </div>
    <?php }

    echo paginate_links();


    ?>

</div>

<?php get_footer();
?>
