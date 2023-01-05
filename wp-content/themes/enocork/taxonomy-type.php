<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package enocork
 */


get_header();
?>

<?php
$current_term = get_queried_object();
$parent  =  $current_term->term_id;
$top_term = get_ancestors($parent, 'type', 'taxonomy');

if ($top_term) :
?>
   <main id="primary" class="site-main main">
      <?php
      $wcatTerms = get_terms('type', array('hide_empty' => 0, 'orderby' => 'ASC', 'parent' => 0));

      foreach ($wcatTerms as $wcatTerm) :
      ?>

      <?php
      endforeach;
      ?>

      <section class="subcategory main-offset">
         <div class="container subcategory__container">
            <nav class="swiper menu">
               <ul class="swiper-wrapper menu__list list-reset">
                  <?php
                  $wcatTermsMenu = get_terms('type', array('hide_empty' => 0, 'orderby' => 'ASC',  'parent' => 0));
                  foreach ($wcatTerms as $wcatTerm) :
                     $wsubargs = array('hierarchical' => 1, 'show_option_none' => '', 'hide_empty' => 0, 'parent' => $wcatTerm->term_id, 'taxonomy' => 'type');
                     $wsubcats = get_categories($wsubargs);
                  ?>
                     <li class="swiper-slide menu__item">
                        <a href="#" class="menu__link">
                           <?php echo $wcatTerm->name; ?>
                           <span class="visually-hidden"><?php echo $wcatTerm->name; ?></span>
                           <svg>
                              <use xlink:href="img/sprite.svg#arrow"></use>
                           </svg>
                        </a>
                        <div class="sub-menu">
                           <ul class="sub-menu__list list-reset">
                              <?php
                              foreach ($wsubcats as $wsc) :
                              ?>
                                 <li class="sub-menu__item">
                                    <a href="<?php echo esc_url(get_term_link($wsc)); ?>" class="sub-menu__link"><?php echo $wsc->name; ?></a>
                                 </li>
                              <?php
                              endforeach;
                              ?>
                           </ul>
                        </div>
                     </li>
                  <?php
                  //foreach ($wsubcats as $wsc) :
                  //echo '<a href="' . esc_url(get_term_link($wsc)) . '">' . $wsc->name . '</a>';  


                  endforeach
                  ?>
               </ul>
            </nav>

            <div class="accordion">
               <svg class="accordion__close">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#close"></use>
               </svg>
               <div class="accordion__wrapper">
                  <div class="accordion__items">
                     <?php
                     $wcatTermsMenu = get_terms('type', array('hide_empty' => 0, 'orderby' => 'ASC',  'parent' => 0));
                     foreach ($wcatTerms as $wcatTerm) :
                        $wsubargs = array('hierarchical' => 1, 'show_option_none' => '', 'hide_empty' => 0, 'parent' => $wcatTerm->term_id, 'taxonomy' => 'type');
                        $wsubcats = get_categories($wsubargs);
                     ?>
                        <div class="accordion__item">
                           <div class="accordion__header">
                              <h3 class="accordion__header-title">
                                 <?php echo $wcatTerm->name; ?>
                                 <span class="visually-hidden"><?php echo $wcatTerm->name; ?></span>
                              </h3>
                              <svg>
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#bottom"></use>
                              </svg>
                           </div>

                           <div class="accordion__body">
                              <div class="accordion__body-content">
                                 <?php
                                 foreach ($wsubcats as $wsc) :
                                 ?>
                                    <a href="<?php echo esc_url(get_term_link($wsc)); ?>" class="accordion__body-item"><?php echo $wsc->name; ?></a>
                                 <?php
                                 endforeach;
                                 ?>
                              </div>
                           </div>
                        </div>
                     <?php
                     //foreach ($wsubcats as $wsc) :
                     //echo '<a href="' . esc_url(get_term_link($wsc)) . '">' . $wsc->name . '</a>';  
                     endforeach
                     ?>
                  </div>
               </div>
            </div>
            <div class="subcategory-products">
               <div class="breadcrumbs">
                  <ul class="breadcrumbs__list list-reset">
                     <li class="breadcrumbs__item-back">
                        <button onclick="window.history.back()" href="<?php echo home_url('/main'); ?>" class="btn-reset breadcrumbs__link breadcrumbs__link-back">
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#bottom"></use>
                           </svg>
                           <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                              Назад
                           <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                              Back
                           <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                              უკან
                           <?php endif; ?>
                        </button>
                     </li>
                     <li class="breadcrumbs__item breadcrumbs__item-main">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php echo home_url('/'); ?>" class="breadcrumbs__link">
                              <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.00033 11.9997C1.63366 11.9997 1.31988 11.8692 1.05899 11.6083C0.797659 11.347 0.666992 11.033 0.666992 10.6663V4.66634C0.666992 4.45523 0.714325 4.25523 0.808992 4.06634C0.903214 3.87745 1.03366 3.7219 1.20033 3.59967L5.20033 0.599675C5.32255 0.510786 5.45033 0.444119 5.58366 0.399674C5.71699 0.35523 5.85588 0.333008 6.00033 0.333008C6.14477 0.333008 6.28366 0.35523 6.41699 0.399674C6.55033 0.444119 6.6781 0.510786 6.80033 0.599675L10.8003 3.59967C10.967 3.7219 11.0977 3.87745 11.1923 4.06634C11.2865 4.25523 11.3337 4.45523 11.3337 4.66634V10.6663C11.3337 11.033 11.2032 11.347 10.9423 11.6083C10.681 11.8692 10.367 11.9997 10.0003 11.9997H7.33366V7.33301H4.66699V11.9997H2.00033Z" fill="black" />
                              </svg>
                           </a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo home_url('/en/main'); ?>" class="breadcrumbs__link">
                              <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.00033 11.9997C1.63366 11.9997 1.31988 11.8692 1.05899 11.6083C0.797659 11.347 0.666992 11.033 0.666992 10.6663V4.66634C0.666992 4.45523 0.714325 4.25523 0.808992 4.06634C0.903214 3.87745 1.03366 3.7219 1.20033 3.59967L5.20033 0.599675C5.32255 0.510786 5.45033 0.444119 5.58366 0.399674C5.71699 0.35523 5.85588 0.333008 6.00033 0.333008C6.14477 0.333008 6.28366 0.35523 6.41699 0.399674C6.55033 0.444119 6.6781 0.510786 6.80033 0.599675L10.8003 3.59967C10.967 3.7219 11.0977 3.87745 11.1923 4.06634C11.2865 4.25523 11.3337 4.45523 11.3337 4.66634V10.6663C11.3337 11.033 11.2032 11.347 10.9423 11.6083C10.681 11.8692 10.367 11.9997 10.0003 11.9997H7.33366V7.33301H4.66699V11.9997H2.00033Z" fill="black" />
                              </svg>
                           </a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo home_url('/ge/main'); ?>" class="breadcrumbs__link">
                              <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.00033 11.9997C1.63366 11.9997 1.31988 11.8692 1.05899 11.6083C0.797659 11.347 0.666992 11.033 0.666992 10.6663V4.66634C0.666992 4.45523 0.714325 4.25523 0.808992 4.06634C0.903214 3.87745 1.03366 3.7219 1.20033 3.59967L5.20033 0.599675C5.32255 0.510786 5.45033 0.444119 5.58366 0.399674C5.71699 0.35523 5.85588 0.333008 6.00033 0.333008C6.14477 0.333008 6.28366 0.35523 6.41699 0.399674C6.55033 0.444119 6.6781 0.510786 6.80033 0.599675L10.8003 3.59967C10.967 3.7219 11.0977 3.87745 11.1923 4.06634C11.2865 4.25523 11.3337 4.45523 11.3337 4.66634V10.6663C11.3337 11.033 11.2032 11.347 10.9423 11.6083C10.681 11.8692 10.367 11.9997 10.0003 11.9997H7.33366V7.33301H4.66699V11.9997H2.00033Z" fill="black" />
                              </svg>
                           </a>
                        <?php endif; ?>
                     </li>
                     <li class="breadcrumbs__item breadcrumbs__item-main">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php echo home_url('/catalog'); ?>" class="breadcrumbs__link breadcrumbs__link--active">Каталог</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo home_url('/en/catalog'); ?>" class="breadcrumbs__link breadcrumbs__link--active">Catalog</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo home_url('/ge/catalog'); ?>" class="breadcrumbs__link breadcrumbs__link--active">პროდუქციის კატალოგი</a>
                        <?php endif; ?>
                     </li>
                     <!--<li class="breadcrumbs__item breadcrumbs__item-main">
                        <a href="<?php echo esc_url(get_term_link($wcatTerm)); ?>" class="breadcrumbs__link breadcrumbs__link--active">
                           <?php echo $wcatTerm->name; ?>
                        </a>
                     </li>-->
                     <li class="breadcrumbs__item breadcrumbs__item-main">
                        <a href="<?php echo esc_url(get_term_link($wcatTerm)); ?>" class="breadcrumbs__link breadcrumbs__link--active"><?php the_archive_title(); ?></a>
                     </li>
                  </ul>
               </div>

               <?php
               the_archive_title('<h1 class="subcategory-title page-title">', '</h1>');
               the_archive_description('<div class="archive-description">', '</div>');
               add_filter('get_the_archive_title', 'artabr_remove_name_cat');



               ?>
               <div class="subcategory-products__wrapper">
                  <!-- items -->
                  <?php if (have_posts()) : ?>
                     <?php
                     /* Start the Loop */
                     while (have_posts()) :
                        the_post();


                        /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                        get_template_part('template-parts/content', get_post_type());

                     endwhile;

                     the_posts_navigation();
                     ?>
               </div>
               <button class="btn btn-primary btn-reset subcategory-btn show-more">
                  <span>Показать еще</span>
               </button>
            </div>
         </div>
      </section>

   <?php
                  else :

                     get_template_part('template-parts/content', 'none');

                  endif;
   ?>
   </main><!-- #main -->
<?php
else :
?>
   <section class="category main-offset">
      <div class="container category__container">
         <div class="catalog-content">
            <div class="catalog-content__descr">
               <div class="breadcrumbs breadcrumbs--category">
                  <ul class="breadcrumbs__list list-reset">
                     <li class="breadcrumbs__item-back">
                        <button onclick="window.history.back()" href="<?php echo home_url('/main'); ?>" class="btn-reset breadcrumbs__link breadcrumbs__link-back">
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#bottom"></use>
                           </svg>
                           <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                              Назад
                           <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                              Back
                           <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                              უკან
                           <?php endif; ?>
                        </button>
                     </li>
                     <li class="breadcrumbs__item breadcrumbs__item-main">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php echo home_url('/'); ?>" class="breadcrumbs__link">
                              <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.00033 11.9997C1.63366 11.9997 1.31988 11.8692 1.05899 11.6083C0.797659 11.347 0.666992 11.033 0.666992 10.6663V4.66634C0.666992 4.45523 0.714325 4.25523 0.808992 4.06634C0.903214 3.87745 1.03366 3.7219 1.20033 3.59967L5.20033 0.599675C5.32255 0.510786 5.45033 0.444119 5.58366 0.399674C5.71699 0.35523 5.85588 0.333008 6.00033 0.333008C6.14477 0.333008 6.28366 0.35523 6.41699 0.399674C6.55033 0.444119 6.6781 0.510786 6.80033 0.599675L10.8003 3.59967C10.967 3.7219 11.0977 3.87745 11.1923 4.06634C11.2865 4.25523 11.3337 4.45523 11.3337 4.66634V10.6663C11.3337 11.033 11.2032 11.347 10.9423 11.6083C10.681 11.8692 10.367 11.9997 10.0003 11.9997H7.33366V7.33301H4.66699V11.9997H2.00033Z" fill="white" />
                              </svg>
                           </a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo home_url('/en/main'); ?>" class="breadcrumbs__link">
                              <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.00033 11.9997C1.63366 11.9997 1.31988 11.8692 1.05899 11.6083C0.797659 11.347 0.666992 11.033 0.666992 10.6663V4.66634C0.666992 4.45523 0.714325 4.25523 0.808992 4.06634C0.903214 3.87745 1.03366 3.7219 1.20033 3.59967L5.20033 0.599675C5.32255 0.510786 5.45033 0.444119 5.58366 0.399674C5.71699 0.35523 5.85588 0.333008 6.00033 0.333008C6.14477 0.333008 6.28366 0.35523 6.41699 0.399674C6.55033 0.444119 6.6781 0.510786 6.80033 0.599675L10.8003 3.59967C10.967 3.7219 11.0977 3.87745 11.1923 4.06634C11.2865 4.25523 11.3337 4.45523 11.3337 4.66634V10.6663C11.3337 11.033 11.2032 11.347 10.9423 11.6083C10.681 11.8692 10.367 11.9997 10.0003 11.9997H7.33366V7.33301H4.66699V11.9997H2.00033Z" fill="white" />
                              </svg>
                           </a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo home_url('/ge/main'); ?>" class="breadcrumbs__link">
                              <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.00033 11.9997C1.63366 11.9997 1.31988 11.8692 1.05899 11.6083C0.797659 11.347 0.666992 11.033 0.666992 10.6663V4.66634C0.666992 4.45523 0.714325 4.25523 0.808992 4.06634C0.903214 3.87745 1.03366 3.7219 1.20033 3.59967L5.20033 0.599675C5.32255 0.510786 5.45033 0.444119 5.58366 0.399674C5.71699 0.35523 5.85588 0.333008 6.00033 0.333008C6.14477 0.333008 6.28366 0.35523 6.41699 0.399674C6.55033 0.444119 6.6781 0.510786 6.80033 0.599675L10.8003 3.59967C10.967 3.7219 11.0977 3.87745 11.1923 4.06634C11.2865 4.25523 11.3337 4.45523 11.3337 4.66634V10.6663C11.3337 11.033 11.2032 11.347 10.9423 11.6083C10.681 11.8692 10.367 11.9997 10.0003 11.9997H7.33366V7.33301H4.66699V11.9997H2.00033Z" fill="white" />
                              </svg>
                           </a>
                        <?php endif; ?>
                     </li>
                     <li class="breadcrumbs__item breadcrumbs__item-main">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php echo home_url('/catalog'); ?>" class="breadcrumbs__link breadcrumbs__link--active">Каталог</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo home_url('/en/catalog'); ?>" class="breadcrumbs__link breadcrumbs__link--active">Catalog</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo home_url('/ge/catalog'); ?>" class="breadcrumbs__link breadcrumbs__link--active">პროდუქციის კატალოგი</a>
                        <?php endif; ?>
                     </li>
                  </ul>
               </div>
               <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                  <div class="catalog-content__title">
                     <h1><?php the_archive_title(); ?></h1>
                     <h3>Экологически чистый материал из Португалии</h3>
                  </div>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <div class="catalog-content__title">
                     <h1><?php the_archive_title(); ?></h1>
                     <h3>Экологически чистый материал из Португалии</h3>
                  </div>
               <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                  <div class="catalog-content__title catalog-content__title--ge">
                     <h1><?php the_archive_title(); ?></h1>
                     <h3>Экологически чистый материал из Португалии</h3>
                  </div>
               <?php endif; ?>

               <div class="catalog-content__download">
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#shape"></use>
                  </svg>
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <a href="<?php the_field('catalog_download'); ?>" target="_blank" download>Скачать каталог</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <a href="<?php the_field('catalog_download'); ?>" target="_blank" download>Download the catalog</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <a href="<?php the_field('catalog_download'); ?>" target="_blank" download>კატალოგის გადმოწერა</a>
                  <?php endif; ?>
               </div>
            </div>
            <div class="catalog-content__image">
               <picture>
                  <source srcset="<?php the_field('category_img'); ?>" />
                  <img loading="lazy" src="<?php the_field('category_img'); ?>" class="image" alt="Catalog" />
               </picture>
            </div>
         </div>

         <div class="category-list">
            <?php
            $wsubargs = array('hierarchical' => 1, 'show_option_none' => '', 'hide_empty' => 0, 'parent' => $parent, 'taxonomy' => 'type');
            $wsubcats = get_categories($wsubargs);

            foreach ($wsubcats as $wsc) :
            ?>
               <a href="<?php echo esc_url(get_term_link($wsc)); ?>" class="category-item catalog-slide">
                  <div class="swiper-slide catalog-slide">
                     <div class="catalog-slide__item">
                        <div class="catalog-slide__image">
                           <picture>
                              <source srcset="<?php the_field('category_img', 'type_' . $wsc->term_id); ?>" />
                              <img loading="lazy" src="<?php the_field('category_img', 'type_' . $wsc->term_id); ?>" class="image" alt="Product" />
                           </picture>
                        </div>
                        <div class="catalog-slide__name">
                           <h3><?php echo $wsc->name; ?></h3>
                        </div>
                     </div>
                  </div>
               </a>
            <?php
            endforeach;

            ?>
         </div>
      </div>
   </section>
   <?php
   ?>
<?php
endif;
?>


<?php
get_footer();
?>