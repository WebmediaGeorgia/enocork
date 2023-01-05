<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package enocork
 */

?>

<div class="new-products__slide new-products__item product" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php
   if (is_singular()) :

   //$current_category = single_term_title();
   //   var_dump($current_category);
   //   echo 'Category: ' . single_cat_title('', false);
   //else :
   endif;

   ?>
   <div class="product-label">
      <div class="product-label__stroke"><span><?php the_field('single_label'); ?></span></div>
   </div>
   <div class="product-image">
      <picture>
         <source srcset="<?php the_field('single_img'); ?>" type="image/webp" />
         <img loading="lazy" src="<?php the_field('single_img'); ?>" class="image" alt="Product" />
      </picture>
   </div>
   <div class="product-bottom">
      <?php the_title('<h3 class="product-name">', '</h3>'); ?>
      <h4 class="product-subtitle">
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#check"></use>
         </svg>
         <span><?php the_field('single_available'); ?></span>
      </h4>
      <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
         <a href="<?php echo esc_url(get_permalink()); ?>" class="btn-reset btn-primary product-btn">Подробнее</a>
      <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
         <a href="<?php echo esc_url(get_permalink()); ?>" class="btn-reset btn-primary product-btn">More</a>
      <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
         <a href="<?php echo esc_url(get_permalink()); ?>" class="btn-reset btn-primary product-btn">მეტი</a>
      <?php endif; ?>
   </div>
   <?php enocork_post_thumbnail(); ?>
</div>