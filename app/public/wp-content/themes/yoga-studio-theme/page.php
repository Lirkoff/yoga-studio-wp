<?php
get_header();

while (have_posts()) {
    the_post();
  ?>

    <main id="primary" class="min-h-screen pt-24">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

                <article <?php post_class( 'prose sm:prose-lg lg:prose-xl mx-auto' ); ?>>
                    <!-- Page title -->
                    <h1 class="mb-6 text-center text-4xl font-extrabold tracking-tight">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Featured image (optional) -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <figure class="mb-8">
                            <?php the_post_thumbnail( 'large', [ 'class' => 'w-full rounded-xl shadow-lg' ] ); ?>
                        </figure>
                    <?php endif; ?>

                    <!-- Page content -->
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>

<!--                 Comments (optional) -->
                <?php
                if ( comments_open() || get_comments_number() ) :
                    echo '<div class="mt-12">';
                    comments_template();
                    echo '</div>';
                endif;
                ?>


        </div>
    </main>

<?php }
get_footer();
?>
