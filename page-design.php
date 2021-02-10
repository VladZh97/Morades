<?php /* Template Name: Projektowanie*/?>

<?php get_header(); ?>

<main class="design">
    <div class="desing__inner">
        <div class="design__top">
            <div class="design__top-container container">
                <div class="design__top-title">
                    <h3 class="top__title-gradient"><?php the_field('title__gradient'); ?></h3>
                    <h3 class="top__title"><?php the_field('title__main'); ?></h3>
                </div>
                <div class="design__quality">
                    <div class="design__row row">
                        
                        <div class="design__item col-md-4">
                            <div class="design__item-top">
                                <img src="<?php echo get_template_directory_uri();?> /assets/img/design1.svg" alt="">
                                <h4 class="design__item-title"><?php the_field('design__title1')?></h4>
                            </div>
                            <p class="design__item-des"><?php the_field('design__des1')?></p>
                        </div>

                        <div class="design__item col-md-4">
                            <div class="design__item-top">
                                <img src="<?php echo get_template_directory_uri();?> /assets/img/design2.svg" alt="">
                                <h4 class="design__item-title"><?php the_field('design__title2')?></h4>
                            </div>
                            <p class="design__item-des"><?php the_field('design__des2')?></p>
                        </div>
                         
                        <div class="design__item col-md-4">
                            <div class="design__item-top">
                                <img src="<?php echo get_template_directory_uri();?> /assets/img/design3.svg" alt="">   
                                <h4 class="design__item-title"><?php the_field('design__title3')?></h4>
                            </div>    
                            <p class="design__item-des"><?php the_field('design__des3')?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="design__info">
            <img class="design__info-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_1.png" alt="">
            <div class="design__info-title">
                <h3 class="title__first"><?php the_field('info-title1'); ?></h3>
                <h2 class="title__second"><?php the_field('info-title2'); ?></h2>
            </div>
            <div class="design__info-block info-block">
                <p class="info-block__title"><?php the_field('info-block__title')?></p>
                <div class="info-block__row">

                    <div class="info-block__item">
                        <img src="<?php the_field('info-block__image1')?>" alt="" class="info-block__image">
                        <h4 class="info-block__item-title"><?php the_field('info-block__title1')?></h4>
                        <p class="info-block__des"><?php the_field('info-block__des1')?></p>
                    </div>

                    <div class="info-block__item">
                        <img src="<?php the_field('info-block__image2')?>" alt="" class="info-block__image">
                        <h4 class="info-block__item-title"><?php the_field('info-block__title2')?></h4>
                        <p class="info-block__des"><?php the_field('info-block__des2')?></p>
                    </div>

                    <div class="info-block__item">
                        <img src="<?php the_field('info-block__image3')?>" alt="" class="info-block__image">
                        <h4 class="info-block__item-title"><?php the_field('info-block__title3')?></h4>
                        <p class="info-block__des"><?php the_field('info-block__des3')?></p>
                    </div>

                </div>
            </div>
        </div>
        <div class="design__contact">
            <img class="design__contact-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/img_4.png" alt="">
            <div class="design__contact-container container">
                <div class="design__contact-item">
                    <h4 class="design__contact-title-small"><?php the_field('design__contact-title1')?></h4>
                    <h3 class="design__contact-title"><?php the_field('design__contact-title2')?></h3>
                    <p class="design__contact-text"><?php the_field('design__contact-text')?></p>
                    <div class="design__contact-tel">
                    <p class="design__tel"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt=""><a href="tel:<?= get_field('tel', 16); ?>"><?php the_field('tel', 16); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();