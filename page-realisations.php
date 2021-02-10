<?php /* Template Name: Realizacje*/?>

<?php get_header(); ?>

<main class="realisations">
    <div class="realisations__inner">
        <div class="container">
            <div class="realisations__top">
                <div class="realisations__top-container">
                    <div class="realisations__top-title">
                        <h3 class="top__title-gradient"><?php the_field('title__gradient'); ?></h3>
                        <h3 class="top__title"><?php the_field('title__main'); ?></h3>
                    </div>
                </div>
            </div>
            <?php if( have_rows('realisations__items') ): ?>
                <div class="realisations__items">
                    <?php while( have_rows('realisations__items') ): the_row(); ?>
                        <div class="realisations__item">
                            <h3 class="realisations__item-title"><?php the_sub_field('realisation__item-title')?></h3>
                            <p class="realisations__item-text"><?php the_sub_field('realisation__item-text')?></p>
                        
                        <div class="realisations__slide">
                        <?php 
                            $link =  get_sub_field('gallery__link');
                            echo do_shortcode($link);
                        ?>
                        </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>


<?php
get_footer();