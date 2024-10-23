<?php
get_header();
?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="page-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile;
    else : ?>

        <p>Cette page n'existe pas ou a été supprimée.</p>

    <?php endif; ?>
</div>

<?php
get_footer();
