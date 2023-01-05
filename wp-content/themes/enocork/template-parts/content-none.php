<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package enocork
 */

?>

<section class="no-results not-found">
   <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
      <h1 style="text-align: center;" class="page-title"><?php esc_html_e('Товаров не найдено', 'enocork'); ?></h1>
   <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
      <h1 style="text-align: center;" class="page-title"><?php esc_html_e('No products found', 'enocork'); ?></h1>
   <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
      <h1 style="text-align: center;" class="page-title"><?php esc_html_e('პროდუქტები არ მოიძებნა', 'enocork'); ?></h1>
   <?php endif; ?>

   <div class="page-content">
      <?php
      if (is_home() && current_user_can('publish_posts')) :

         printf(
            '<p>' . wp_kses(
               /* translators: 1: link to WP admin new post page. */
               __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'enocork'),
               array(
                  'a' => array(
                     'href' => array(),
                  ),
               )
            ) . '</p>',
            esc_url(admin_url('post-new.php'))
         );

      elseif (is_search()) :
      ?>

         <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'enocork'); ?></p>
      <?php
         get_search_form();

      else :
      ?>


      <?php


      endif;
      ?>
   </div><!-- .page-content -->
</section><!-- .no-results -->