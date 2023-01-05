<?php

/*
Template Name: Catalog
 */

get_header();
?>


<main class="main">
   <section class="catalog main-offset">
      <div class="container catalog__container">
         <div class="catalog-content">
            <div class="catalog-content__descr">
               <div class="breadcrumbs">
                  <ul class="breadcrumbs__list list-reset">
                     <li class="breadcrumbs__item-back">
                        <button onclick="window.history.back()" class="btn-reset breadcrumbs__link breadcrumbs__link-back">
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
                           <a href="products-page.html" class="breadcrumbs__link breadcrumbs__link--active">Каталог товаров</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="products-page.html" class="breadcrumbs__link breadcrumbs__link--active">Product catalog</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="products-page.html" class="breadcrumbs__link breadcrumbs__link--active">პროდუქციის კატალოგი</a>
                        <?php endif; ?>
                     </li>
                  </ul>
               </div>
               <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                  <h1 class="catalog-content__title">Каталог товаров</h1>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <h1 class="catalog-content__title">Product catalog</h1>
               <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                  <h1 class="catalog-content__title">კატალოგი</h1>
               <?php endif; ?>
            </div>
            <div class="catalog-content__image">
               <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg3.webp" type="image/webp" />
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg3.png" class="image" alt="Catalog" />
               </picture>
            </div>
         </div>
         <div class="catalog-products__sliders">
            <?php
            $wcatTerms = get_terms('type', array('hide_empty' => 0, 'orderby' => 'ASC',  'parent' => 0));
            foreach ($wcatTerms as $wcatTerm) :
               $wsubargs = array('hierarchical' => 1, 'show_option_none' => '', 'hide_empty' => 0, 'parent' => $wcatTerm->term_id, 'taxonomy' => 'type');
               $wsubcats = get_categories($wsubargs);

            ?>
               <div class="catalog-product__slider">
                  <div class="product-descr">
                     <div class="product-descr__name">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <?php echo '<h2 class="product-descr__title">' . $wcatTerm->name . '</h2>'; ?>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <?php echo '<h2 class="product-descr__title">' . $wcatTerm->name . '</h2>'; ?>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <?php echo '<h2 class="product-descr__title product-descr__title--ge">' . $wcatTerm->name . '</h2>'; ?>
                        <?php endif; ?>

                        <div class="product-descr__bottom">
                           <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                              <?php echo '<a href="' . esc_url(get_term_link($wcatTerm)) . '" class="btn-reset btn-primary product-descr__btn">' . 'Перейти' . '</a>'; ?>
                           <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                              <?php echo '<a href="' . esc_url(get_term_link($wcatTerm)) . '" class="btn-reset btn-primary product-descr__btn">' . 'Go to' . '</a>'; ?>
                           <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                              <?php echo '<a href="' . esc_url(get_term_link($wcatTerm)) . '" class="btn-reset btn-primary product-descr__btn">' . 'გადასვლა' . '</a>'; ?>
                           <?php endif; ?>
                           <div class="slider-btns">
                              <div class="slider-prev catalog-prev">
                                 <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#left"></use>
                                 </svg>
                              </div>
                              <div class="slider-next catalog-next">
                                 <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#right"></use>
                                 </svg>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper catalog-swiper">
                     <div class="swiper-wrapper catalog-swiper__wrapper">

                        <?php
                        foreach ($wsubcats as $wsc) :
                        ?>
                           <a href="<?php echo esc_url(get_term_link($wsc)); ?>" class="swiper-slide catalog-slide">
                              <div class="catalog-slide__item">
                                 <div class="catalog-slide__image">
                                    <picture>
                                       <source srcset="<?php the_field('category_img', 'type_' . $wsc->term_id); ?>" type="image/webp" />
                                       <img loading="lazy" src="<?php the_field('category_img', 'type_' . $wsc->term_id); ?>" class="image" alt="Product" />
                                    </picture>
                                 </div>

                                 <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                                    <div class="catalog-slide__name">
                                       <h3><?php echo $wsc->name; ?></h3>
                                    </div>
                                 <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                    <div class="catalog-slide__name">
                                       <h3><?php echo $wsc->name; ?></h3>
                                    </div>
                                 <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                                    <div class="catalog-slide__name catalog-slide__name--ge">
                                       <h3><?php echo $wsc->name; ?></h3>
                                    </div>
                                 <?php endif; ?>
                              </div>
                           </a>
                        <?php
                        endforeach;
                        ?>
                     </div>
                  </div>

               </div>

            <?php
               foreach ($wsubcats as $wsc) :
               endforeach;

            endforeach;
            ?>

         </div>
      </div>
   </section>
</main>


<?php
get_footer();
?>