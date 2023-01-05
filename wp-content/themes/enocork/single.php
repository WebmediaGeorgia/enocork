<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package enocork
 */

get_header();
?>

<main id="primary" class="main">
   <?php
   while (have_posts()) :
      the_post();

      //get_template_part('template-parts/content-single', get_post_type());

   ?>

      <?php
      $wcatTerms = get_terms('type', array('hide_empty' => 0, 'orderby' => 'ASC', 'parent' => 0));

      foreach ($wcatTerms as $wcatTerm) :
      ?>

      <?php
      endforeach;
      ?>
      <section class="single main-offset">
         <div class="container single__container">
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
                  <li class="breadcrumbs__item breadcrumbs__item-main">
                     <a href="<?php echo esc_url(get_term_link($wcatTerm)); ?>" class="breadcrumbs__link breadcrumbs__link--active">
                        <?php echo $wcatTerm->name; ?>
                     </a>
                  </li>
                  <li class="breadcrumbs__item breadcrumbs__item-main">
                     <a href="<?php echo esc_url(get_term_link($wcatTerm)); ?>" class="breadcrumbs__link breadcrumbs__link--active"><?php the_title(); ?></a>
                  </li>
               </ul>
            </div>

            <div class="short-descr">
               <div class="short-descr__image">
                  <picture>
                     <source srcset="<?php the_field('single_img'); ?>" type="image/webp" />
                     <img loading="lazy" src="<?php the_field('single_img'); ?>" class="image" alt="Single" />
                  </picture>
               </div>
               <div class="short-descr__content">
                  <h1 class="short-descr__title">
                     <?php the_title(); ?>
                  </h1>
                  <h4 class="product-subtitle">
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#check"></use>
                     </svg>
                     <span><?php the_field('single_available'); ?></span>
                  </h4>
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <h3 class="short-descr__subtitle">Краткое описание</h3>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <h3 class="short-descr__subtitle">Short description</h3>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <h3 class="short-descr__subtitle">Მოკლე აღწერა</h3>
                  <?php endif; ?>
                  <p class="short-descr__text">
                     <?php the_field('single_short_descr'); ?>
                  </p>
                  <div class="short-descr__bottom">
                     <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                        <a href="#" class="btn-primary btn-reset" data-graph-path="modal-feedback" data-graph-animation="fadeInUp">
                           Обратный звонок
                        </a>
                     <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                        <a href="#" class="btn-primary btn-reset" data-graph-path="modal-feedback" data-graph-animation="fadeInUp">
                           Back call
                        </a>
                     <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                        <a href="#" class="btn-primary btn-reset" data-graph-path="modal-feedback" data-graph-animation="fadeInUp">
                           უკუზარი
                        </a>
                     <?php endif; ?>

                     <div class="catalog-content__download">
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#shape"></use>
                        </svg>

                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php the_field('single_documentation'); ?>" target="_blank" download>Тех.Документация</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php the_field('single_documentation'); ?>" target="_blank" download>Technical documentation</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php the_field('single_documentation'); ?>" target="_blank" download>ტექნიკური დოკუმენტაცია</a>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>

            <div class="information">
               <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                  <h2 class="information-title">Информация</h2>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <h2 class="information-title">Information</h2>
               <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                  <h2 class="information-title">ინფორმაცია</h2>
               <?php endif; ?>
               <div class="information-wrapper">
                  <div class="information-content" id="information">
                     <div class="information-item info-product">
                        <h3 class="info-product__title"><?php the_field('single_ingridients_title'); ?></h3>
                        <p class="info-product__text">
                           <?php the_field('single_ingridients_text'); ?>
                        </p>
                     </div>

                     <div class="information-item info-product">
                        <h3 class="info-product__title"><?php the_field('single_char_title'); ?></h3>

                        <?php if (have_rows('single_char_items')) : ?>
                           <?php while (have_rows('single_char_items')) : the_row(); ?>
                              <?php $single_char_item_title = get_sub_field('single_char_item_title'); ?>
                              <?php $single_char_item_text = get_sub_field('single_char_item_text'); ?>

                              <ul class="info-product__list list-reset">
                                 <h3 class="info-product__subtitle"><?php echo $single_char_item_title; ?></h3>
                                 <p class="info-product__text">
                                    <?php echo $single_char_item_text; ?>
                                 </p>
                              </ul>
                           <?php endwhile; ?>
                        <?php endif; ?>
                        <ul class="info-product__list list-reset">
                           <h3 class="info-product__subtitle">
                              <?php the_field('single_char_text'); ?>
                           </h3>
                        </ul>
                     </div>

                     <div class="information-item info-product product-instruction">
                        <h3 class="info-product__title"><?php the_field('single_instruction_title'); ?></h3>
                        <ul class="info-product__list list-reset">
                           <p class="info-product__text">
                              <?php the_field('single_instruction_text'); ?>
                           </p>
                        </ul>
                     </div>
                  </div>
               </div>
               <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                  <a href="#information" class="information-hide">
                     <span class="information-hide__text">Показать</span>
                     <span class="information-hide__btn"></span>
                  </a>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <a href="#information" class="information-hide--en">
                     <span class="information-hide__text">Show</span>
                     <span class="information-hide__btn"></span>
                  </a>
               <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                  <a href="#information" class="information-hide--ge">
                     <span class="information-hide__text">დამალვა</span>
                     <span class="information-hide__btn"></span>
                  </a>
               <?php endif; ?>
            </div>
         </div>
      </section>


      <section class="feedback main-offset">
         <div class="container feedback__container">
            <div class="feedback__wrapper">
               <div class="modal-content feedback-content">
                  <div class="modal-content__form feedback-content__form">
                     <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                        <h3 class="modal-content__title feedback-content__title">
                           Нужна консультация?
                        </h3>
                     <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                        <h3 class="modal-content__title feedback-content__title">
                           Need a consultation?
                        </h3>
                     <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                        <h3 class="modal-content__title feedback-content__title feedback-content__title--ge">
                           გჭირდებათ კონსულტაცია?
                        </h3>
                     <?php endif; ?>


                     <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                        <p class="modal-content__text feedback-content__text">
                           Оставьте заявку, мы <span>быстро перезвоним</span> и ответим на все
                           вопросы
                        </p>
                     <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                        <p class="modal-content__text feedback-content__text">
                           Need a consultation?
                           Leave a request we will call you back quickly and answer all your questions
                        </p>
                     <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                        <p class="modal-content__text feedback-content__text">
                           დატოვეთ განაცხადი, ჩვენ სწრაფად გადმოგირეკავთ და ვუპასუხებთ თქვენს ყველა კითხვას
                        </p>
                     <?php endif; ?>
                     <div class="form">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <?php echo do_shortcode('[contact-form-7 id="329" title="Контактная форма RU"]'); ?>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <?php echo do_shortcode('[contact-form-7 id="331" title="Контактная форма EN"]'); ?>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <?php echo do_shortcode('[contact-form-7 id="332" title="Контактная форма GE"]'); ?>
                        <?php endif; ?>
                     </div>

                     <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                        <p class="form__text">
                           Нажимая кнопку «Заказать звонок» Вы даете согласие на обработку
                           ваших персональных данных
                        </p>
                     <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                        <p class="form__text">
                           By clicking the “Submit a request” button You consent to the processing of your personal data
                        </p>
                     <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                        <p class="form__text">
                           ღილაკზე „განაცხადის დატოვება“ დაწკაპუნებით თქვენ ეთანხმებით თქვენი პერსონალური მონაცემების დამუშავებას
                        </p>
                     <?php endif; ?>
                  </div>
               </div>
            </div>

            <div class="barrel__decoration">
               <div class="barrel__decoration-images">
                  <div class="barrel-decor barrel-decor1">
                     <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/feedback1.webp" type="image/webp" />
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/feedback1.png" class="image" alt="Barrel" />
                     </picture>
                  </div>
                  <div class="barrel-decor barrel-decor2">
                     <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/feedback2.webp" type="image/webp" />
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/feedback2.png" class="image" alt="Barrel" />
                     </picture>
                  </div>
               </div>
               <div class="barrel__decoration-shadows">
                  <div class="barrel-decor__shadow barrel-decor__shadow1"></div>
                  <div class="barrel-decor__shadow barrel-decor__shadow2"></div>
               </div>
            </div>
         </div>
      </section>

      <section class="new-products main-offset">
         <div class="container new-products__container">
            <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
               <h2 class="page-title new-products__title">С ЭТИМ ТОВАРОМ ПОКУПАЮТ</h2>
            <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
               <h2 class="page-title new-products__title">WITH THIS PRODUCT, THEY BUY</h2>
            <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
               <h2 class="page-title new-products__title">ამ პროდუქციასთან ერთად ყიდულობენ</h2>
            <?php endif; ?>

            <div class="swiper new-products-swiper">
               <div class="swiper-wrapper new-products-swiper__wrapper">
                  <?php
                  $args = array(
                     'post_type' => 'products',
                     'posts_per_page' => 10,
                     'orderby' => 'rand',
                  );
                  $query = new WP_Query($args);

                  while ($query->have_posts()) :
                     $query->the_post();
                  ?>
                     <div class="swiper-slide new-products__slide new-products__item product">
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
                           <h3 class="product-name"><?php the_title(); ?></h3>
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
                     </div>
                  <?php
                  endwhile;
                  ?>
               </div>

               <div class="new-products-swiper__bottom">
                  <div class="new-products__pagination">
                     <div class="swiper-pagination"></div>
                  </div>
                  <div class="slider-btns">
                     <div class="slider-prev new-products-prev">
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#left"></use>
                        </svg>
                     </div>
                     <div class="slider-next new-products-next">
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#right"></use>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>

            <svg class="new-products__bg" width="787" height="811" viewBox="0 0 787 811" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M256.135 32.3079C119.464 95.5265 36.0073 233.808 36.0073 397.057C36.0073 439.392 28.0729 474.019 18.3937 474.019C-11.1214 474.019 -1.21383 506.184 31.6039 516.899C48.5528 522.424 80.6435 555.133 102.951 589.585C125.238 624.036 172.222 669.168 207.366 689.896L211.515 692.341C232.52 704.72 227.19 736.483 203.294 741.327V741.327C177.808 747.926 147.692 762.269 122.818 777.675C92.9776 796.157 102.944 806.071 133.754 789.255V789.255C237.005 732.932 320.296 746.318 485.942 756.647C570.936 761.944 704.367 818.926 698.842 810.004C693.504 801.402 552.907 741.327 538.181 741.327C523.475 741.327 577.894 712.1 619.332 680.499C711.325 610.401 756.709 536.341 764.581 443.509C767.863 404.904 776.42 363.802 783.628 352.172C800.099 325.55 750.25 269.157 698.842 256.261C672.609 249.68 647.331 216.846 621.513 155.792C590.211 81.7858 577.354 67.4619 551.723 78.0024C484.84 105.477 462.74 106.123 431.511 77.2093C427.598 73.5862 423.476 70.1661 419.007 67.2553L415.911 65.2384C395.858 52.1761 370.872 49.1803 348.3 57.1319L305.237 72.3015C219.724 109.603 147.525 169.022 165.679 187.181C171.162 192.654 168.067 211.27 158.804 228.582C147.027 250.56 148.543 262.418 163.83 267.943C176.313 272.465 164.869 285.627 137.202 298.612C110.512 311.141 98.7554 308.781 92.4411 302.482C69.1987 279.274 132.986 152.343 204.104 94.1195C261.091 47.4583 293.359 44.6632 375.114 25.1648C381.079 23.7423 387.21 22.9988 393.342 23.0012C482.844 23.036 502.238 24.108 572.016 57.1703C616.008 78.0025 648.494 94.9288 642.782 85.6749C637.028 76.4003 601.51 53.1048 563.812 33.8914C477.447 -10.1326 349.313 -10.8008 256.135 32.3079ZM388.216 130.911C388.216 162.512 439.831 165.116 502.33 136.666C553.676 113.298 577.666 128.113 586.971 188.941C590.294 210.759 611.314 241.41 633.643 257.051C670.739 283.005 671.632 286.947 643.841 302.482C621.887 314.748 605.54 311.597 585.081 291.186C565.245 271.357 563.479 262.877 579.182 262.877C591.52 262.877 596.712 254.957 590.73 245.28C570.126 211.954 549.044 227.773 556.833 270.705C561.963 298.965 554.008 320.359 533.673 333.046C508.769 348.582 513.9 350.236 559.907 341.422C597.024 334.314 617.13 337.41 617.13 350.219C617.13 361.092 603.359 367.656 586.473 364.823C568.34 361.762 548.608 375.926 538.181 399.485C528.231 421.955 510.244 435.38 496.951 430.277C483.99 425.298 465.649 421.233 456.157 421.233C446.706 421.233 444.193 412.769 450.591 402.441C456.967 392.095 472.898 387.733 485.942 392.747C501.23 398.605 506.194 392.747 499.9 376.348C494.5 362.325 473.127 350.73 452.356 350.589C421.553 350.36 419.476 347.193 441.036 333.257C463.095 319.023 461.641 315.715 432.229 313.251C412.871 311.633 387.406 309.433 375.67 308.376C363.935 307.322 344.12 295.48 331.637 282.09C312.901 261.943 313.566 260.183 335.375 271.919C349.915 279.714 355.793 279.504 348.461 271.427C341.108 263.369 317.346 255.997 295.641 255.063C263.592 253.673 255.741 263.263 254.079 305.72C252.936 334.523 243.029 361.075 232.062 364.734C221.095 368.395 212.101 382.312 212.101 395.685C212.101 426.477 146.923 462.212 113.897 449.544C67.3295 431.684 100.085 343.622 159.032 328.225C178.557 323.122 190.105 326.131 184.663 334.893C179.242 343.674 164.308 350.852 151.492 350.852C138.656 350.852 124.013 366.706 118.945 386.06C113.876 405.433 116.244 417.256 124.2 412.348C132.155 407.438 142 409.41 146.092 416.729C150.163 424.049 151.098 420.143 148.128 408.038C145.199 395.949 150.454 386.043 159.821 386.043C169.21 386.043 177.061 395.949 177.269 408.038C177.477 420.143 193.242 395.702 212.309 353.739C239.934 292.911 242.925 269.931 227.015 240.266C209.692 207.908 214.801 196.63 266.167 153.785C330.619 100.032 388.216 89.2279 388.216 130.911ZM260.539 181.798C222.757 210.442 221.51 221.827 256.135 221.827C270.654 221.827 278.65 217.938 273.894 213.169C269.137 208.418 274.081 193.903 284.861 180.918C309.495 151.251 300.377 151.585 260.539 181.798ZM463.053 201.223C432.935 235.391 435.428 246.318 470.343 232.946C490.055 225.38 495.476 228.443 486.918 242.29C479.898 253.621 482.577 262.877 492.838 262.877C503.078 262.877 511.469 251 511.469 236.483C511.469 211.463 534.026 201.592 573.117 209.475C582.796 211.427 584.479 206.783 576.856 199.164C552.076 174.408 485.631 175.603 463.053 201.223ZM379.409 245.28C373.407 254.957 370.976 263.456 373.967 264.178C376.958 264.9 397.833 268.912 420.39 273.081C456.863 279.839 458.463 277.761 434.846 254.167C403.69 223.041 394.115 221.509 379.409 245.28ZM313.795 390.441C289.95 421.903 267.206 457.269 263.28 469.057C259.001 481.849 246.892 484.736 233.163 476.219C215.798 465.45 224.107 446.272 267.227 397.62C337.868 317.896 372.908 312.512 313.795 390.441ZM687.584 346.612C687.584 353.967 671.258 370.171 651.298 382.611C617.815 403.516 616.507 402.495 634.328 369.256C653.022 334.312 687.584 319.62 687.584 346.612ZM476.408 474.318C488.248 496.418 485.693 511.673 467.664 526.628C447.059 543.714 434.036 538.206 399.225 497.789C375.567 470.306 359.262 442.912 363 436.893C376.044 415.797 459.875 443.455 476.408 474.318ZM658.651 499.074C724.473 500.554 725.491 515.65 665.63 601.954C629.53 654.018 519.57 709.637 481.601 695.068C445.959 681.398 454.308 588.952 494.479 552.634C514.211 534.811 526.715 510.793 522.27 499.269C517.846 487.743 523.413 469.127 534.629 457.92C550.103 442.472 560.364 444.829 577.063 467.65C589.879 485.157 624.026 498.319 658.651 499.074ZM203.294 509.21C209.297 518.887 233.08 526.805 256.177 526.805C279.606 526.805 310.284 544.1 325.571 565.918C361.858 617.667 361.941 702.757 325.696 702.757C228.053 702.757 59.9766 524.165 138.241 503.561C187.654 490.54 191.995 490.928 203.294 509.21Z" fill="#A12B4E" />
            </svg>
         </div>
      </section>
   <?php
   endwhile; // End of the loop.
   ?>


   <?php
   get_footer();
