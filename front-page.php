<?php /* Template Name: Strona glowna*/?>

<?php get_header(); ?>

<main class="front">
    <div class="container front__container">
        <div class="front__top-title">
            <h3 class="top__title-gradient"><?php the_field('title__gradient'); ?></h3>
            <h3 class="top__title"><?php the_field('title__main'); ?></h3>
        </div>
        
        <div class="front__row">
            <div class="front__row-container">

                <!-- DESIGN ROW -->
                <div class="project__des front__des" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="500">
                    <h3 class="project__title title"><?php the_field('project__title'); ?></h3>
                    <p class="project__text text"><?php the_field('project__text'); ?></p>
                    <p class="front__button"><a href="<?php echo the_permalink( 10 ); ?>" class="project__link link"><?php the_field('front__link-text'); ?></a></p>
                </div>
                <div class="project__image image">
                    <img src="<?php the_field('project__image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>


        <!-- CAMPAIGN ROW -->
        <div class="front__container">
            <div class="front__row-container">
                <div class="campaign__image image">
                    <img src="<?php the_field('campaign__image'); ?>" alt="">
                </div>
                <div class="campaign__des front__des" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="500">
                    <h3 class="campaign__title title"><?php the_field('campaign__title'); ?></h3>
                    <p class="campaign__text text"><?php the_field('campaign__text'); ?></p>
                    <p class="front__button"><a href="<?php echo the_permalink( 12 ); ?>" class="campaign__link link"><?php the_field('front__link-text'); ?></a></p>
                </div>
            </div>
        </div>


    <!-- REALISATIONS ROW -->
    <div class="container front__container">
        <div class="front__row">
            <div class="front__row-container">
                <div class="realisations__des front__des" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="500">
                    <h3 class="realisations__title title"><?php the_field('realisations__title'); ?></h3>
                    <p class="realisations__text text"><?php the_field('realisations__text'); ?></p>
                    <p class="front__button"><a href="<?php echo the_permalink( 14 ); ?>" class="realisations__link link"><?php the_field('front__link-text'); ?></a></p>
                </div>
                <div class="realisations__image image">
                    <img src="<?php the_field('realisations__image'); ?>" alt="<?php get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true);?>">
                </div>
            </div>
        </div>
    </div>

            <!-- CONTACT ROW -->
        <div class="front__container">
            <div class="front__row-container">
                <div class="contact__image image">
                    <img src="<?php the_field('contact__image'); ?>" alt="">
                </div>
                <div class="contact__des front__des" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="500">
                    <h3 class="contact__title title"><?php the_field('contact__title'); ?></h3>
                    <p class="contact__text text"><?php the_field('contact__text'); ?></p>
                    <p class="front__button"><a href="<?php echo the_permalink( 16 ); ?>" class="contact__link link"><?php the_field('front__link-text'); ?></a></p>
                </div>
            </div>
        </div>
        


        <!-- FRONT PAGE FOOTER -->
    <div class="container front-footer__container">
        <div class="front-footer">
            <div class="front-footer__image" data-aos="zoom-out" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="300">
                <img src="<?php the_field('front-footer__img')?>" alt="" class="front-footer__img">
            </div>
            <div class="front-footer__links">
                <a class="front-footer__link" href="<?php the_field('front-footer__link1')?>"><?php the_field('front-footer__link1-text')?></a>
                <a class="front-footer__link" href="<?php the_field('front-footer__link2')?>"><?php the_field('front-footer__link2-text')?></a>
            </div>
            <p class="front-footer__text" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"><?php the_field('front-footer_text'); ?></p>
        </div>
    </div>
</main>


<?php
get_footer();