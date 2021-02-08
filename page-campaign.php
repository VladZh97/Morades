<?php /* Template Name: Kampania*/?>

<?php get_header(); ?>

<main class="campaigns">
    <div class="campaigns__inner">
        <div class="campaigns__container container">
            
            <div class="campaigns__des">
                <div class="campaigns__des-title campaigns__title">
                    <h3 class="top__title-gradient"><?php the_field('title__des-gradient'); ?></h3>
                    <h3 class="top__title"><?php the_field('title__des-main'); ?></h3>
                </div>
                <div class="campaigns__description">
                    <div class="campaigns__image" data-aos="zoom-out-right" data-aos-easing="linear" data-aos-duration="500">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_8.png" alt="" class="campaigns__img">
                    </div>
                    <div class="campaigns__text" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400"><?php the_field('campaign__text')?></div>
                </div>
            </div>

            <div class="campaigns__list">
                <div class="campaigns__list-title campaigns__title">
                    <h3 class="top__title-gradient"><?php the_field('title__list-gradient'); ?></h3>
                    <h3 class="top__title"><?php the_field('title__list-main'); ?></h3>
                </div>
                <div class="campaigns__items row">
                <?php if( have_rows('campaign__items') ): ?>
                    <?php while( have_rows('campaign__items') ): the_row(); ?>
                        <div class="campaigns__item col-md-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                            <div class="campaigns__item-top">
                                <img src="<?php the_sub_field('campaign__item-img')?>" alt="" class="campaigns__item-img">
                                <h3 class="campaigns__item-title"><?php the_sub_field('campaign__item-title')?></h3>
                            </div>
                            <p class="campaigns__item-text"><?php the_sub_field('campaign__item-text')?></p>
                            <button class="campaigns__item-btn">rozwiń</button>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();