<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enocork
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_utLFfOa_KLP6JbEy4KUHQU3K06_mMJQ&callback=initMap&v=weekly" defer></script>
   <?php wp_head(); ?>
</head>

<body <?php body_class('page__body'); ?>>
   <?php wp_body_open(); ?>
   <div class="site-container">
      <header class="header fix-block">
         <div class="container header__container">
            <button class="burger" aria-label="Открыть меню" aria-expanded="false" data-burger>
               <span class="burger__line"></span>
            </button>
            <nav class="nav">
               <div class="nav__list-wrapper" data-menu>
                  <?php
                  $logo_img_mob = '';
                  if ($custom_logo_id = get_theme_mod('custom_logo')) {
                     $logo_img_mob = wp_get_attachment_image($custom_logo_id, 'full', false, array(
                        'class'    => 'image', // здесь Ваш class
                        'alt' => get_bloginfo('name'),
                        'itemprop' => 'logo',
                     ));
                  }
                  ?>
                  <a href="<?php echo home_url('/'); ?>" class="header__logo-mob">
                     <?php echo $logo_img_mob; ?>
                  </a>
                  <ul class="nav__list list-reset">
                     <li class="nav__item">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php echo home_url('/'); ?>" class="nav__link">Главная</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo home_url('/en/main'); ?>" class="nav__link">Main</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo home_url('/ge/main'); ?>" class="nav__link">ქართული</a>
                        <?php endif; ?>
                     </li>

                     <li class="nav__item">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php echo home_url('/catalog'); ?>" class="nav__link">Каталог</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo home_url('/en/catalog'); ?>" class="nav__link">Catalog</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo home_url('/ge/catalog'); ?>" class="nav__link">კატალოგი</a>
                        <?php endif; ?>
                     </li>

                     <li class="nav__item">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php echo home_url('/about'); ?>" class="nav__link">О компании</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo home_url('/en/about'); ?>" class="nav__link">About</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo home_url('/ge/about'); ?>" class="nav__link">კომპანიის შესახებ</a>
                        <?php endif; ?>
                     </li>

                     <li class="nav__item">
                        <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                           <a href="<?php echo home_url('/contacts'); ?>" class="nav__link">Контакты</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo home_url('/en/contacts'); ?>" class="nav__link">Contacts</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo home_url('/ge/contacts'); ?>" class="nav__link">კონტაქტები</a>
                        <?php endif; ?>
                     </li>
                  </ul>

                  <div class="nav__list-mob">
                     <div class="mob-connect">
                        <div class="mob-connect__item">
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
                           </svg>
                           <?php $phone_number = get_theme_mod('phone_number'); ?>
                           <span><?php echo $phone_number; ?></span>
                        </div>

                        <div class="mob-connect__item">
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                           </svg>
                           <?php $mail_link = get_theme_mod('mail_link'); ?>
                           <span><?php echo $mail_link; ?></span>
                        </div>
                     </div>

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
                              <h3 class="modal-content__title feedback-content__title">
                                 Need a consultation?
                              </h3>
                           <?php endif; ?>

                           <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                              <p class="modal-content__text feedback-content__text">
                                 Оставьте заявку, мы <span>быстро перезвоним</span> и ответим на
                                 все вопросы
                              </p>
                           <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                              <p class="modal-content__text feedback-content__text">
                                 Leave a request, we will <span>quickly call you back</span> and answer your
                                 all questions
                              </p>
                           <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                              <p class="modal-content__text feedback-content__text">
                                 Leave a request, we will <span>quickly call you back</span> and answer your
                                 all questions
                              </p>
                           <?php endif; ?>
                           <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                              <?php echo do_shortcode('[contact-form-7 id="329" title="Контактная форма RU"]'); ?>
                           <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                              <?php echo do_shortcode('[contact-form-7 id="331" title="Контактная форма EN"]'); ?>
                           <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                              <?php echo do_shortcode('[contact-form-7 id="332" title="Контактная форма GE"]'); ?>
                           <?php endif; ?>

                           <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                              <p class="form__text">
                                 Нажимая кнопку «Заказать звонок» Вы даете согласие на обработку
                                 ваших персональных данных
                              </p>
                           <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                              <p class="form__text">
                                 By clicking the "Request a call" button, you consent to the processing
                                 your personal data
                              </p>
                           <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                              <p class="form__text">
                                 By clicking the "Request a call" button, you consent to the processing
                                 your personal data
                              </p>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>


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
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="header__logo">
               <?php echo $logo_img; ?>
            </a>



            <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
               <a href="#" class="header__btn btn-primary btn-reset" data-graph-path="modal-consultation" data-graph-animation="fadeInUp">
                  <span>Обратный звонок</span>
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
                  </svg>
               </a>
            <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
               <a href="#" class="header__btn btn-primary btn-reset" data-graph-path="modal-consultation" data-graph-animation="fadeInUp">
                  <span>Callback</span>
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
                  </svg>
               </a>
            <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
               <a href="#" class="header__btn btn-primary btn-reset" data-graph-path="modal-consultation" data-graph-animation="fadeInUp">
                  <span>უკურეკვა</span>
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
                  </svg>
               </a>
            <?php endif; ?>


            <ul class="header__lang lang list-reset" id="top-lang" data-da=".nav__list-mob,1200,1">
               <svg>
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#lang"></use>
               </svg>
               <li class="pll-parent-menu-item lang__item-active lang__item">
                  <a class="lang-item lang-item--el" href="#switcher"><?php echo pll_current_language('slug') ?>
                  </a>
                  <ul class="lang__sub-menu list-reset">
                     <?php if (function_exists('pll_the_languages')) {
                        pll_the_languages(array('display_names_as' => 'slug', 'hide_current' => 1));
                     } ?>
                  </ul>
               </li>
            </ul>
         </div>
      </header>

      <aside class="social">
         <div class="social__wrapper fix-block">
            <ul class="social__list list-reset">
               <?php $phone_link = get_theme_mod('phone_link'); ?>
               <?php $mail_link = get_theme_mod('mail_link'); ?>
               <?php $whatsapp_link = get_theme_mod('whatsapp_link'); ?>
               <?php $telegram_link = get_theme_mod('telegram_link'); ?>

               <a href="tel:<?php echo $phone_link; ?>" class="social__link social__link--phone" aria-label="Наш телефон">
                  <div class="social__icon">
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
                     </svg>
                  </div>
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <span class="social__title">Заказать звонок</span>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <span class="social__title">Request a call</span>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <span class="social__title">უკურეკვა</span>
                  <?php endif; ?>
               </a>

               <li class="social__item">
                  <a href="mailto:<?php echo $mail_link; ?>" class="social__link social__link--mail" aria-label="Наша почта">
                     <div class="social__icon">
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                        </svg>
                     </div>
                     <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                        <span class="social__title">Напишите нам</span>
                     <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                        <span class="social__title">Write to us</span>
                     <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                        <span class="social__title">მოგვწერეთ</span>
                     <?php endif; ?>
                  </a>
               </li>
               <li class="social__item">
                  <a href="<?php echo $whatsapp_link; ?>" target="_blank" class="social__link social__link--whatsapp" aria-label="Мы в Whatsapp">
                     <div class="social__icon">
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#whatsapp"></use>
                        </svg>
                     </div>
                     <span class="social__title">Whatsapp</span>
                  </a>
               </li>
               <li class="social__item">
                  <a href="<?php echo $telegram_link; ?>" target="_blank" class="social__link social__link--telegram" aria-label="Мы в Telegram">
                     <div class="social__icon">
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#telegram"></use>
                        </svg>
                     </div>
                     <span class="social__title">Telegram</span>
                  </a>
               </li>
            </ul>
         </div>
      </aside>

      <div class="graph-modal modal">
         <div class="graph-modal__container modal__container modal-consultation" role="dialog" aria-modal="true" data-graph-target="modal-consultation">
            <button class="btn-reset js-modal-close graph-modal__close modal-close" aria-label="Закрыть модальное окно"></button>
            <div class="graph-modal__content modal-content">
               <div class="modal-content__form">
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <h3 class="modal-content__title">Нужна консультация?</h3>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <h3 class="modal-content__title">Need a consultation?</h3>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <h3 class="modal-content__title modal-content__title--ge">გჭირდებათ რჩევა?</h3>
                  <?php endif; ?>

                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <p class="modal-content__text">
                        Оставьте заявку, мы <span>быстро перезвоним</span> и ответим на все
                        вопросы
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <p class="modal-content__text">
                        Leave a request, we will <span>quickly call you back</span> and answer everything
                        questions
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <p class="modal-content__text">
                        დატოვეთ მოთხოვნა, ჩვენ <span>სწრაფად დაგირეკავთ</span> და ვუპასუხებთ ყველაფერს
                        კითხვები
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
                        Нажимая кнопку «Заказать звонок» Вы даете согласие на обработку ваших
                        персональных данных
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <p class="form__text">
                        By clicking the “Submit a request” button You consent to the processing of your personal data
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <p class="form__text">
                        "ზარის მოთხოვნა" ღილაკზე დაწკაპუნებით თქვენ ეთანხმებით თქვენი ზარის დამუშავებას
                        პერსონალური მონაცემები
                     </p>
                  <?php endif; ?>

               </div>
               <div class="modal-content__image">
                  <picture>
                     <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/modal-consultation.webp" type="image/webp" />
                     <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/modal-consultation.png" class="image" alt="Modal image" />
                  </picture>
               </div>
            </div>
         </div>

         <div class="graph-modal__container modal__container modal-feedback" role="dialog" aria-modal="true" data-graph-target="modal-feedback">
            <button class="btn-reset js-modal-close graph-modal__close modal-close" aria-label="Закрыть модальное окно">
               <svg class="modal-close--white">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#close"></use>
               </svg>
            </button>
            <div class="graph-modal__content modal-content">
               <div class="modal-content__form">
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <h3 class="modal-content__title">Оставить заявку</h3>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <h3 class="modal-content__title">Submit your application</h3>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <h3 class="modal-content__title">გაგზავნეთ თქვენი განაცხადი</h3>
                  <?php endif; ?>


                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <p class="modal-content__text">
                        Оставьте заявку, мы <span>быстро перезвоним</span> и ответим на все
                        вопросы
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <p class="modal-content__text">
                        Leave a request, we will <span>quickly call you back</span> and answer everything
                        questions
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <p class="modal-content__text">
                        დატოვეთ მოთხოვნა, ჩვენ <span>სწრაფად დაგირეკავთ</span> და ვუპასუხებთ ყველაფერს
                        კითხვები
                     </p>
                  <?php endif; ?>
                  <div class="form">
                     <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                        <?php echo do_shortcode('[contact-form-7 id="333" title="Контактная форма Modal_RU"]'); ?>
                     <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                        <?php echo do_shortcode('[contact-form-7 id="334" title="Контактная форма Modal_EN"]'); ?>
                     <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                        <?php echo do_shortcode('[contact-form-7 id="335" title="Контактная форма Modal_GE"]'); ?>
                     <?php endif; ?>
                  </div>


                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <p class="form__text">
                        Нажимая кнопку «Заказать звонок» Вы даете согласие на обработку ваших
                        персональных данных
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <p class="form__text">
                        By clicking the “Submit a request” button You consent to the processing of your personal data
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <p class="form__text">
                        "ზარის მოთხოვნა" ღილაკზე დაწკაპუნებით თქვენ ეთანხმებით თქვენი ზარის დამუშავებას
                        პერსონალური მონაცემები
                     </p>
                  <?php endif; ?>
               </div>
               <div class="modal-content__image">
                  <picture>
                     <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/modal-feedback.webp" type="image/webp" />
                     <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/modal-feedback.png" class="image" alt="Modal image" />
                  </picture>
               </div>
            </div>
         </div>
      </div>