<?php /* Template Name: Kontakt*/?>

<?php get_header(); ?>

<main class="contact-page">
    <div class="contact-page__inner">
        <div class="container">
            <div class="contact-page__top">
                <div class="contact-page__top-container">
                    <div class="contact-page__top-title">
                        <h3 class="top__title-gradient"><?php the_field('title__gradient'); ?></h3>
                        <h3 class="top__title"><?php the_field('title__main'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-main">
            <img class="contact-main__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-bg.png" alt="">
            <div class="contact-main__container container">
                <div class="contact-main__body">
                    <h3 class="contact-main__title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"><?php the_field('contact-main__title')?></h3>
                    <div class="contact-main__items">
                    <p class="contact-main__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt=""><a href="tel:<?= get_field('tel'); ?>"><?php the_field('tel'); ?></a></p>
                    <p class="contact-main__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="200"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt=""><a href="mailto:<?= get_field('mail'); ?>"><?php the_field('mail'); ?></a></p>
                    <p class="contact-main__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.png" alt=""><span class="contact-main__street"><?php the_field('street')?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form" id="form">
            <div class="contact-form__container container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                <h3 class="contact-form__title"><?php the_field('contact-form__title')?></h3>
                <div class="contact-form__body">
                <?= do_shortcode('[contact-form-7 id="24" title="Formularz"]')?>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();