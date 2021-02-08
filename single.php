<?php
get_header();
?>
<div class="single-page">
    <div class="single-page__inner">
        <div class="container">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="single-page__des">
                        <h1 class="single-page__title"><?php the_title(); ?></h1>
                        <div class="single-page__content">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; else: ?>
                        <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
                        <?php endif; ?>
                    </div>
        </div>
    </div>
</div>

<?php
get_footer();