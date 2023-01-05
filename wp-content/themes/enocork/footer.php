<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enocork
 */

?>

<footer class="footer">
   <div class="container footer__container">
      <div class="footer-left">

         <?php
         $logo_img = '';
         if ($custom_logo_id = get_theme_mod('custom_logo')) {
            $logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
               'class'    => 'image', // здесь Ваш class
               'alt' => get_bloginfo('name'),
               'itemprop' => 'logo',
            ));
         }
         ?>
         <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="footer-logo">
            <?php echo $logo_img; ?>
         </a>

         <nav class="footer-nav">
            <ul class="footer-nav__list list-reset">
               <li class="footer-nav__item">
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <a href="<?php echo home_url('/'); ?>" class="footer-nav__link">Главная</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <a href="<?php echo home_url('/en/main'); ?>" class="footer-nav__link">Main</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <a href="<?php echo home_url('/ge/main'); ?>" class="footer-nav__link">მთავარი</a>
                  <?php endif; ?>
               </li>

               <li class="footer-nav__item">
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <a href="<?php echo home_url('/catalog'); ?>" class="footer-nav__link">Каталог</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <a href="<?php echo home_url('/en/catalog'); ?>" class="footer-nav__link">Catalog</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <a href="<?php echo home_url('/ge/catalog'); ?>" class="footer-nav__link">კატალოგი</a>
                  <?php endif; ?>
               </li>

               <li class="footer-nav__item">
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <a href="<?php echo home_url('/about'); ?>" class="footer-nav__link">О компании</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <a href="<?php echo home_url('/en/about'); ?>" class="footer-nav__link">About</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <a href="<?php echo home_url('/ge/about'); ?>" class="footer-nav__link">კომპანიის შესახებ</a>
                  <?php endif; ?>
               </li>

               <li class="footer-nav__item">
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <a href="<?php echo home_url('/contacts'); ?>" class="footer-nav__link">Контакты</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <a href="<?php echo home_url('/en/contacts'); ?>" class="footer-nav__link">Contacts</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <a href="<?php echo home_url('/ge/contacts'); ?>" class="footer-nav__link">კონტაქტები</a>
                  <?php endif; ?>
               </li>
            </ul>
         </nav>


         <div class="footer-connect">
            <?php $mail_link = get_theme_mod('mail_link'); ?>
            <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
               <a href="#" class="footer-btn btn-primary btn-reset" data-graph-path="modal-consultation" data-graph-animation="fadeInUp">
                  Обратный звонок
               </a>
            <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
               <a href="#" class="footer-btn btn-primary btn-reset" data-graph-path="modal-consultation" data-graph-animation="fadeInUp">
                  Callback
               </a>
            <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
               <a href="#" class="footer-btn btn-primary btn-reset" data-graph-path="modal-consultation" data-graph-animation="fadeInUp">
                  უკურეკვა
               </a>
            <?php endif; ?>
            <a href="mailto:<?php echo $mail_link; ?>" class="footer-mail">
               <svg>
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
               </svg>
               <?php echo $mail_link; ?></a>
         </div>
      </div>
      <div class="footer-center qr-code">
         <?php $footer_qr_code = get_theme_mod('footer_qr_code'); ?>
         <picture>
            <source srcset="<?php echo $footer_qr_code; ?>" type="image/webp" />
            <img loading="lazy" src="<?php echo $footer_qr_code; ?>" class="image" alt="QR code" />
         </picture>
      </div>



      <div class="footer-map" id="map">
      </div>
   </div>
   <div class="copyright">
      <?php $footer_copyright = get_theme_mod('copyright'); ?>
      <p><?php echo $footer_copyright; ?></p>
   </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>

</html>