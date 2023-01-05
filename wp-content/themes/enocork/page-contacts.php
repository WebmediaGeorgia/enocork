<?php

/*
Template Name: Contacts
 */

get_header();
?>


<main class="main">
   <section class="contacts main-offset">
      <div class="container contacts__container">
         <div class="contacts__content">
            <div class="breadcrumbs breadcrumbs--contacts">
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
                     <a href="index.html" class="breadcrumbs__link">
                        <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M2.00033 11.9997C1.63366 11.9997 1.31988 11.8692 1.05899 11.6083C0.797659 11.347 0.666992 11.033 0.666992 10.6663V4.66634C0.666992 4.45523 0.714325 4.25523 0.808992 4.06634C0.903214 3.87745 1.03366 3.7219 1.20033 3.59967L5.20033 0.599675C5.32255 0.510786 5.45033 0.444119 5.58366 0.399674C5.71699 0.35523 5.85588 0.333008 6.00033 0.333008C6.14477 0.333008 6.28366 0.35523 6.41699 0.399674C6.55033 0.444119 6.6781 0.510786 6.80033 0.599675L10.8003 3.59967C10.967 3.7219 11.0977 3.87745 11.1923 4.06634C11.2865 4.25523 11.3337 4.45523 11.3337 4.66634V10.6663C11.3337 11.033 11.2032 11.347 10.9423 11.6083C10.681 11.8692 10.367 11.9997 10.0003 11.9997H7.33366V7.33301H4.66699V11.9997H2.00033Z" fill="black" />
                        </svg>
                     </a>
                  </li>
                  <li class="breadcrumbs__item breadcrumbs__item-main">
                     <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                        <a href="#" class="breadcrumbs__link breadcrumbs__link--active">Контакты</a>
                     <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                        <a href="#" class="breadcrumbs__link breadcrumbs__link--active">Contacts</a>
                     <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                        <a href="#" class="breadcrumbs__link breadcrumbs__link--active">კონტაქტები</a>
                     <?php endif; ?>
                  </li>
               </ul>
            </div>
            <h1 class="contacts__title"><?php the_field('contacts_title'); ?></h1>
            <div class="contacts__inner">
               <?php if (have_rows('contacts_items')) : ?>
                  <?php while (have_rows('contacts_items')) : the_row(); ?>
                     <?php $contacts_item_title = get_sub_field('contacts_item_title'); ?>
                     <?php $contacts_item_icon = get_sub_field('contacts_item_icon'); ?>
                     <?php $contacts_item_text = get_sub_field('contacts_item_text'); ?>
                     <?php $contacts_item_link = get_sub_field('contacts_item_link'); ?>

                     <div class="contacts-item">
                        <h4 class="contacts-item__title"><?php echo $contacts_item_title; ?></h4>
                        <a href="<?php echo $contacts_item_link; ?>" class="contacts-item__link">
                           <?php echo file_get_contents($contacts_item_icon); ?>
                           <?php echo $contacts_item_text; ?>
                        </a>
                     </div>
                  <?php endwhile; ?>
               <?php endif; ?>


               <div class="contacts-item">
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <h4 class="contacts-item__title">Соцсети</h4>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <h4 class="contacts-item__title">Social network</h4>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <h4 class="contacts-item__title">Social network</h4>
                  <?php endif; ?>
                  <?php if (have_rows('contacts_social')) : ?>
                     <div class="contacts__social-items">
                        <?php while (have_rows('contacts_social')) : the_row(); ?>
                           <?php $contacts_social_icon = get_sub_field('contacts_social_icon'); ?>
                           <?php $contacts_social_link = get_sub_field('contacts_social_link'); ?>
                           <a href="<?php echo $contacts_social_link; ?>" class="contacts-item__link social-media">
                              <?php echo file_get_contents($contacts_social_icon); ?>
                           </a>
                        <?php endwhile; ?>
                     <?php endif; ?>
                     </div>
               </div>
            </div>
         </div>
         <div class="contacts-map" id="map-contacts">
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
</main>


<?php

get_footer();
