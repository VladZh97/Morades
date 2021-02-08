<footer class="footer">
  <div class="footer__container container">
    <div class="footer__item">
      <a href="<?php echo get_home_url()?>" class="footer__logo-link"><img src="<?php the_field('footer__logo', 'option'); ?>" alt="" class="footer__logo"></a>
    </div>
    <div class="footer__item">
    <h4 class="footer__title">Nawigacja</h4>
      <?php
        wp_nav_menu(array(
          'container'      => '',
          'menu_id'        => 'footer__nav',
          'menu_class'     => 'footer__nav',
          'fallback_cb'    => 'thesis_nav_menu',
          'theme_location' => 'footer',
        ));
        ?>
    </div>
    <div class="footer__item">
    <h4 class="footer__title">kontakt</h4>
      <p class="footer__tel"><a href="tel:<?= get_field('tel', 16); ?>"><?php the_field('tel', 16); ?></a></p>
      <p class="footer__mail"><a href="mailto:<?= get_field('mail', 16); ?>"><?php the_field('mail', 16); ?></a></p>
    </div>
    <div class="footer__item">
      <h4 class="footer__title">napisz do nas</h4>
      <a href="<?php echo get_permalink( 16 ); ?>#form" class="footer__contact">Teraz!</a>
    </div>
  </div>
  <div class="footer__seo">
    <p class="footer__copy">Copyrights. All righs reserved. </p>
    <div class="footer__seo-container"><a class="footer__seo-link" title="Millenium Studio" href="http://www.milleniumstudio.pl" target="_blank">projektowanie stron</a> <span style="cursor:pointer;" onclick="location.href = 'http://www.milleniumstudio.pl';">Millenium Studio</span></div>
  </div>
</footer>
<?php wp_footer(); ?>
<script>var privacylink = "<?php echo get_page_link(30) ?>";</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>