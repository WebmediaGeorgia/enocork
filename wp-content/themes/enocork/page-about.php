<?php

/*
Template Name: About
 */

get_header();
?>


<main class="main">
   <section class="about-hero main-offset">
      <div class="container about-hero__container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/about-page-bg.png')">
         <div class="about-hero__content">
            <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
               <h1 class="about-hero__title"><?php the_field('about_hero_title'); ?></h1>
               <h3 class="about-hero__subtitle"><?php the_field('about_hero_subtitle'); ?></h3>
            <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
               <h1 class="about-hero__title about-hero__title--en"><?php the_field('about_hero_title'); ?></h1>
               <h3 class="about-hero__subtitle"><?php the_field('about_hero_subtitle'); ?></h3>
            <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
               <h1 class="about-hero__title about-hero__title--ge"><?php the_field('about_hero_title'); ?></h1>
               <h3 class="about-hero__subtitle"><?php the_field('about_hero_subtitle'); ?></h3>
            <?php endif; ?>
            <p class="about-hero__text">
               <?php the_field('about_hero_text'); ?>
            </p>
         </div>
      </div>
   </section>

   <section class="description main-offset">
      <div class="container description__container">
         <div class="description-item about-company">
            <div class="about-company__content">
               <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                  <h4 class="about-company__title"><?php the_field('descr_title1'); ?></h4>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <h4 class="about-company__title"><?php the_field('descr_title1'); ?></h4>
               <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                  <h4 class="about-company__title about-company__title--ge"><?php the_field('descr_title1'); ?></h4>
               <?php endif; ?>
               <p class="about-company__text">
                  <?php the_field('descr_text1'); ?>
               </p>
            </div>
            <div class="about-company__image">
               <picture>
                  <source srcset="<?php the_field('descr_img1'); ?>" />
                  <img loading="lazy" src="<?php the_field('descr_img1'); ?>" class="image" alt="Image" />
               </picture>
            </div>
         </div>

         <div class="description-item about-company">
            <div class="about-company__image">
               <picture>
                  <source srcset="<?php the_field('descr_img2'); ?>" />
                  <img loading="lazy" src="<?php the_field('descr_img2'); ?>" class="image" alt="Image" />
               </picture>
            </div>
            <div class="about-company__content">
               <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                  <h4 class="about-company__title"><?php the_field('descr_title2'); ?></h4>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <h4 class="about-company__title"><?php the_field('descr_title2'); ?></h4>
               <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                  <h4 class="about-company__title about-company__title--ge"><?php the_field('descr_title2'); ?></h4>
               <?php endif; ?>
               <p class="about-company__text">
                  <?php the_field('descr_text2'); ?>
               </p>
            </div>
         </div>

         <div class="description-item about-company">
            <div class="about-company__content about-company__content--bg">
               <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                  <h4 class="about-company__title"><?php the_field('descr_title3'); ?></h4>
               <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                  <h4 class="about-company__title"><?php the_field('descr_title3'); ?></h4>
               <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                  <h4 class="about-company__title about-company__title--ge"><?php the_field('descr_title3'); ?></h4>
               <?php endif; ?>
               <p class="about-company__text">
                  <?php the_field('descr_text3'); ?>
               </p>
               <p class="about-company__text">
                  <?php the_field('descr_second_text3'); ?>
               </p>
               <div class="about-company__bottom">
                  <p class="about-company__text">
                     <?php the_field('descr_third_text3'); ?>
                  </p>
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <a href="<?php echo home_url('/catalog'); ?>" class="about-company__btn btn-primary btn-reset">
                        Перейти в каталог
                     </a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <a href="<?php echo home_url('/catalog'); ?>" class="about-company__btn btn-primary btn-reset">
                        Go to catalog
                     </a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <a href="<?php echo home_url('/catalog'); ?>" class="about-company__btn btn-primary btn-reset">
                        კატალოგში გადასვლა
                     </a>
                  <?php endif; ?>
               </div>
               <div class="about-company__bg">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-company-bg.png" class="image" alt="Image" />
               </div>
            </div>
            <div class="about-company__image">
               <picture>
                  <source srcset="<?php the_field('descr_img3'); ?>" />
                  <img loading="lazy" src="<?php the_field('descr_img3'); ?>" class="image" alt="Image" />
               </picture>
            </div>
         </div>
      </div>
   </section>


   <section class="instagram main-offset">
      <div class="container instagram__container">
         <div class="swiper insta-swiper">
            <h2 class="page-title insta-swiper__title"><?php the_field('insta_title'); ?></h2>
            <div class="swiper-wrapper insta-swiper__wrapper">

               <?php if (have_rows('insta_images')) : ?>
                  <?php while (have_rows('insta_images')) : the_row(); ?>
                     <?php $insta_img = get_sub_field('insta_img'); ?>
                     <div class="swiper-slide insta-swiper__slide">
                        <picture>
                           <source srcset="<?php echo $insta_img; ?>" type="image/webp" />
                           <img loading="lazy" src="<?php echo $insta_img; ?>" class="image" alt="Image" />
                        </picture>
                     </div>
                  <?php endwhile; ?>
               <?php endif; ?>

            </div>
            <p class="insta-swiper__text">
               <?php the_field('insta_text'); ?>
            </p>
            <div class="insta-swiper__bottom">
               <div class="insta-link">
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#insta"></use>
                  </svg>
                  <h4 class="insta-link__title"><?php the_field('insta_subtitle'); ?></h4>
               </div>
               <div class="slider-btns">
                  <div class="slider-prev insta-prev">
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#left"></use>
                     </svg>
                  </div>
                  <div class="slider-next insta-next">
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#right"></use>
                     </svg>
                  </div>
               </div>
            </div>
         </div>

         <picture>
            <source srcset="<?php the_field('insta_phone'); ?>" type="image/webp" />
            <img loading="lazy" src="<?php the_field('insta_phone'); ?>" class="image iphone" alt="Iphone" />
         </picture>
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
</main>


<?php

get_footer();
