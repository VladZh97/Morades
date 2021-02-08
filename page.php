<?php
get_header();
?>

<div class="page-single">
    <div class="page-single__inner">
        <div class="container">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="page-single__des">
                        <h1 class="page-single__title"><?php the_title(); ?></h1>
                        <div class="page-single__content">
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