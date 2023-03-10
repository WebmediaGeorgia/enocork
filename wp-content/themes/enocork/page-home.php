<?php

/*
Template Name: Home
 */

get_header();
?>

<main class="main">
   <section class="hero main-offset">
      <div class="container hero__container">
         <div class="swiper hero-swiper">
            <div class="swiper-wrapper hero-wrapper">
               <?php if (have_rows('hero_swiper')) : ?>
                  <?php while (have_rows('hero_swiper')) : the_row(); ?>
                     <?php $hero_img = get_sub_field('hero_swiper_img'); ?>
                     <?php $hero_title = get_sub_field('hero_swiper_title'); ?>
                     <?php $hero_subtitle = get_sub_field('hero_swiper_subtitle'); ?>
                     <?php $hero_text = get_sub_field('hero_swiper_text'); ?>

                     <div class="swiper-slide hero-slide">
                        <div class="hero-bg">
                           <picture>
                              <source srcset="<?php echo $hero_img; ?>" type="image/webp" />
                              <img loading="lazy" src="<?php echo $hero_img; ?>" class="image" alt="Background" />
                           </picture>
                        </div>
                        <div class="hero-content">
                           <div class="hero-content__wrapper">
                              <div class="hero-content__text">
                                 <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                                    <h1 class="hero__title"><?php echo $hero_title; ?></h1>
                                    <h4 class="hero__subtitle"><?php echo $hero_subtitle; ?></h4>
                                 <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                    <h1 class="hero__title hero__title--en"><?php echo $hero_title; ?></h1>
                                    <h4 class="hero__subtitle hero__subtitle--en"><?php echo $hero_subtitle; ?></h4>
                                 <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                                    <h1 class="hero__title hero__title--ge"><?php echo $hero_title; ?></h1>
                                    <h4 class="hero__subtitle hero__subtitle--ge"><?php echo $hero_subtitle; ?></h4>
                                 <?php endif; ?>
                              </div>
                              <p class="hero__text"><?php echo $hero_text; ?></p>
                           </div>
                        </div>
                     </div>
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
            <div class="slider-btns">
               <div class="slider-prev hero-prev">
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#left"></use>
                  </svg>
               </div>
               <div class="slider-next hero-next">
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#right"></use>
                  </svg>
               </div>
            </div>

            <div class="hero-swiper__pagination">
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   </section>


   <section class="products main-offset">
      <div class="container products__container">
         <div class="products-descr products-descr--mob">
            <div class="products-descr__wrapper">
               <div class="products-descr__content">
                  <h2 class="page-title products-descr__title">
                     <?php the_field('products_title'); ?>
                  </h2>
                  <p class="products-descr__text">
                     <?php the_field('products_text'); ?>
                  </p>
               </div>
            </div>
         </div>
         <div class="products__wrapper">
            <div class="swiper products-swiper">
               <div class="swiper-wrapper products-swiper__wrapper">
                  <div class="swiper-slide products-swiper__slide swiper-slide__descr">
                     <div class="products-descr">
                        <div class="products-descr__wrapper">
                           <div class="products-descr__images">
                              <div class="bottles">
                                 <svg class="bottle bottle1" viewBox="0 0 469 844" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M251.292 318.519C194.087 300.2 194.794 291.923 192.319 281.895C190.223 273.403 154.289 127.012 135.989 52.5236C140.18 49.8466 142.518 45.1815 141.435 40.7952L136.809 22.0529C135.729 17.6782 131.582 14.8995 126.747 14.8477L125.482 9.72242C125.482 9.72242 122.939 -10.3172 61.2718 7.61917L59.2856 8.19686C-2.39385 26.1368 4.64704 44.868 4.64704 44.868L5.91219 49.9933C1.75445 52.686 -0.559961 57.3314 0.517013 61.6944L5.14346 80.4366C6.22621 84.823 10.3732 87.6018 15.2489 87.6418C33.7249 162.08 70.023 308.365 72.119 316.856C74.5972 326.896 79.0067 333.671 37.9162 380.581C-3.17423 427.492 12.5513 479.99 12.5513 479.99C12.5513 479.99 157.013 1027.56 176.568 1107.95C196.114 1188.36 339.592 1139.48 339.592 1139.48C339.592 1139.48 486.363 1103.93 466.256 1023.71C446.16 943.469 319.047 390.856 319.047 390.856C319.061 390.852 308.471 336.863 251.288 318.521L251.292 318.519Z" fill="white" />
                                    <path d="M315.139 389.532C315.2 389.765 315.255 389.98 315.305 390.176L315.674 391.779L319.047 390.856C315.674 391.779 315.674 391.781 315.675 391.785L315.679 391.804L315.697 391.88L315.766 392.18L316.039 393.367L317.106 398.005C317.531 399.854 318.048 402.097 318.649 404.711C319.371 407.847 320.216 411.518 321.175 415.682C324.69 430.949 329.734 452.849 335.849 479.38C348.08 532.442 364.598 604.027 381.743 678.12C416.028 826.28 452.84 984.537 462.898 1024.7C467.619 1043.53 462.607 1059.68 452.222 1073.56C441.737 1087.57 425.784 1099.24 408.898 1108.58C392.056 1117.9 374.549 1124.77 361.219 1129.32C354.562 1131.59 348.967 1133.28 345.042 1134.39C343.08 1134.95 341.536 1135.36 340.488 1135.64C339.964 1135.77 339.564 1135.88 339.297 1135.94C339.174 1135.97 339.079 1136 339.014 1136.01L338.998 1136.02L338.926 1136.03L338.91 1136.04L338.907 1136.04L338.752 1136.08L338.601 1136.13L338.598 1136.13L338.582 1136.13L338.512 1136.16C338.448 1136.18 338.35 1136.21 338.219 1136.26C337.957 1136.34 337.563 1136.47 337.046 1136.64C336.012 1136.97 334.484 1137.45 332.529 1138.03C328.616 1139.2 322.995 1140.77 316.184 1142.42C302.546 1145.72 284.219 1149.27 265.341 1150.34C246.412 1151.41 227.224 1149.97 211.688 1143.52C196.299 1137.13 184.521 1125.87 179.932 1106.99L176.568 1107.95L179.932 1106.99C170.144 1066.75 129.129 909.714 90.5746 762.795C71.2943 689.324 52.6252 618.364 38.7763 565.773C31.8518 539.477 26.1323 517.774 22.1439 502.644C20.1497 495.079 18.5883 489.158 17.5254 485.127L16.3133 480.531L16.003 479.355L15.9245 479.058L15.9048 478.983L15.8999 478.964C15.8988 478.96 15.8982 478.958 12.5513 479.99L15.8982 478.958L15.8835 478.902L15.8681 478.851L15.8678 478.85L15.8677 478.849L15.8669 478.847L15.8632 478.834C15.8583 478.817 15.8498 478.788 15.8381 478.746C15.8145 478.663 15.7779 478.531 15.7302 478.352C15.6349 477.993 15.4957 477.445 15.3302 476.722C14.9992 475.277 14.5633 473.134 14.162 470.408C13.3588 464.95 12.6978 457.177 13.2814 447.98C14.447 429.611 20.569 405.596 40.4617 382.886C61.0095 359.427 70.5489 345.612 74.5289 336.194C76.5665 331.373 77.2059 327.576 77.0591 324.171C76.9441 321.502 76.3224 319.124 75.798 317.118C75.6854 316.687 75.5773 316.274 75.4797 315.878C73.383 307.384 37.084 161.095 18.6085 86.6599L17.9799 84.1272L15.3996 84.1061C11.701 84.0757 9.13594 82.0184 8.50419 79.4591L3.87775 60.7169C3.25271 58.1848 4.52425 55.0118 7.6928 52.9597L9.89448 51.5339L9.27292 49.0158L8.00776 43.8906L7.95861 43.6914L7.92731 43.6081C7.92005 43.5745 7.90892 43.5166 7.89825 43.4355C7.86621 43.1922 7.83654 42.729 7.93465 42.0711C8.12515 40.7935 8.83649 38.5273 11.4053 35.5373C16.6549 29.4269 29.4916 20.5047 60.1244 11.5949L62.1106 11.0172C92.737 2.10926 107.964 2.86892 115.327 5.31122C118.93 6.50638 120.591 8.08296 121.345 9.08629C121.734 9.60294 121.922 10.0203 122.006 10.2484C122.035 10.3245 122.052 10.3808 122.061 10.4138L122.072 10.5018L122.121 10.6999L123.386 15.8252L124.011 18.3557L126.588 18.3833C130.248 18.4225 132.818 20.4786 133.448 23.0304L138.075 41.7726C138.704 44.3215 137.416 47.5078 134.227 49.545L132.005 50.9646L132.627 53.4973C141.693 90.3958 155.086 144.941 166.549 191.628C178.226 239.185 187.9 278.586 188.958 282.872C189.056 283.269 189.153 283.686 189.254 284.122C189.723 286.14 190.279 288.534 191.407 290.906C192.847 293.935 195.148 296.876 199.133 299.947C205.874 305.143 217.748 310.931 239.39 318.339L239.213 318.391L250.144 321.897C277.828 330.777 294.196 348.255 303.671 363.531C308.414 371.179 311.424 378.27 313.242 383.431C314.151 386.01 314.76 388.102 315.139 389.532Z" stroke="#A12B4E" stroke-opacity="0.7" stroke-width="7" />
                                 </svg>
                                 <svg class="bottle bottle2" viewBox="0 0 469 844" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M251.292 318.519C194.087 300.2 194.794 291.923 192.319 281.895C190.223 273.403 154.289 127.012 135.989 52.5236C140.18 49.8466 142.518 45.1815 141.435 40.7952L136.809 22.0529C135.729 17.6782 131.582 14.8995 126.747 14.8477L125.482 9.72242C125.482 9.72242 122.939 -10.3172 61.2718 7.61917L59.2856 8.19686C-2.39385 26.1368 4.64704 44.868 4.64704 44.868L5.91219 49.9933C1.75445 52.686 -0.559961 57.3314 0.517013 61.6944L5.14346 80.4366C6.22621 84.823 10.3732 87.6018 15.2489 87.6418C33.7249 162.08 70.023 308.365 72.119 316.856C74.5972 326.896 79.0067 333.671 37.9162 380.581C-3.17423 427.492 12.5513 479.99 12.5513 479.99C12.5513 479.99 157.013 1027.56 176.568 1107.95C196.114 1188.36 339.592 1139.48 339.592 1139.48C339.592 1139.48 486.363 1103.93 466.256 1023.71C446.16 943.469 319.047 390.856 319.047 390.856C319.061 390.852 308.471 336.863 251.288 318.521L251.292 318.519Z" fill="white" />
                                    <path d="M315.139 389.532C315.2 389.765 315.255 389.98 315.305 390.176L315.674 391.779L319.047 390.856C315.674 391.779 315.674 391.781 315.675 391.785L315.679 391.804L315.697 391.88L315.766 392.18L316.039 393.367L317.106 398.005C317.531 399.854 318.048 402.097 318.649 404.711C319.371 407.847 320.216 411.518 321.175 415.682C324.69 430.949 329.734 452.849 335.849 479.38C348.08 532.442 364.598 604.027 381.743 678.12C416.028 826.28 452.84 984.537 462.898 1024.7C467.619 1043.53 462.607 1059.68 452.222 1073.56C441.737 1087.57 425.784 1099.24 408.898 1108.58C392.056 1117.9 374.549 1124.77 361.219 1129.32C354.562 1131.59 348.967 1133.28 345.042 1134.39C343.08 1134.95 341.536 1135.36 340.488 1135.64C339.964 1135.77 339.564 1135.88 339.297 1135.94C339.174 1135.97 339.079 1136 339.014 1136.01L338.998 1136.02L338.926 1136.03L338.91 1136.04L338.907 1136.04L338.752 1136.08L338.601 1136.13L338.598 1136.13L338.582 1136.13L338.512 1136.16C338.448 1136.18 338.35 1136.21 338.219 1136.26C337.957 1136.34 337.563 1136.47 337.046 1136.64C336.012 1136.97 334.484 1137.45 332.529 1138.03C328.616 1139.2 322.995 1140.77 316.184 1142.42C302.546 1145.72 284.219 1149.27 265.341 1150.34C246.412 1151.41 227.224 1149.97 211.688 1143.52C196.299 1137.13 184.521 1125.87 179.932 1106.99L176.568 1107.95L179.932 1106.99C170.144 1066.75 129.129 909.714 90.5746 762.795C71.2943 689.324 52.6252 618.364 38.7763 565.773C31.8518 539.477 26.1323 517.774 22.1439 502.644C20.1497 495.079 18.5883 489.158 17.5254 485.127L16.3133 480.531L16.003 479.355L15.9245 479.058L15.9048 478.983L15.8999 478.964C15.8988 478.96 15.8982 478.958 12.5513 479.99L15.8982 478.958L15.8835 478.902L15.8681 478.851L15.8678 478.85L15.8677 478.849L15.8669 478.847L15.8632 478.834C15.8583 478.817 15.8498 478.788 15.8381 478.746C15.8145 478.663 15.7779 478.531 15.7302 478.352C15.6349 477.993 15.4957 477.445 15.3302 476.722C14.9992 475.277 14.5633 473.134 14.162 470.408C13.3588 464.95 12.6978 457.177 13.2814 447.98C14.447 429.611 20.569 405.596 40.4617 382.886C61.0095 359.427 70.5489 345.612 74.5289 336.194C76.5665 331.373 77.2059 327.576 77.0591 324.171C76.9441 321.502 76.3224 319.124 75.798 317.118C75.6854 316.687 75.5773 316.274 75.4797 315.878C73.383 307.384 37.084 161.095 18.6085 86.6599L17.9799 84.1272L15.3996 84.1061C11.701 84.0757 9.13594 82.0184 8.50419 79.4591L3.87775 60.7169C3.25271 58.1848 4.52425 55.0118 7.6928 52.9597L9.89448 51.5339L9.27292 49.0158L8.00776 43.8906L7.95861 43.6914L7.92731 43.6081C7.92005 43.5745 7.90892 43.5166 7.89825 43.4355C7.86621 43.1922 7.83654 42.729 7.93465 42.0711C8.12515 40.7935 8.83649 38.5273 11.4053 35.5373C16.6549 29.4269 29.4916 20.5047 60.1244 11.5949L62.1106 11.0172C92.737 2.10926 107.964 2.86892 115.327 5.31122C118.93 6.50638 120.591 8.08296 121.345 9.08629C121.734 9.60294 121.922 10.0203 122.006 10.2484C122.035 10.3245 122.052 10.3808 122.061 10.4138L122.072 10.5018L122.121 10.6999L123.386 15.8252L124.011 18.3557L126.588 18.3833C130.248 18.4225 132.818 20.4786 133.448 23.0304L138.075 41.7726C138.704 44.3215 137.416 47.5078 134.227 49.545L132.005 50.9646L132.627 53.4973C141.693 90.3958 155.086 144.941 166.549 191.628C178.226 239.185 187.9 278.586 188.958 282.872C189.056 283.269 189.153 283.686 189.254 284.122C189.723 286.14 190.279 288.534 191.407 290.906C192.847 293.935 195.148 296.876 199.133 299.947C205.874 305.143 217.748 310.931 239.39 318.339L239.213 318.391L250.144 321.897C277.828 330.777 294.196 348.255 303.671 363.531C308.414 371.179 311.424 378.27 313.242 383.431C314.151 386.01 314.76 388.102 315.139 389.532Z" stroke="#A12B4E" stroke-opacity="0.3" stroke-width="3.41" />
                                 </svg>
                                 <svg class="bottle bottle3" viewBox="0 0 469 844" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M251.292 318.519C194.087 300.2 194.794 291.923 192.319 281.895C190.223 273.403 154.289 127.012 135.989 52.5236C140.18 49.8466 142.518 45.1815 141.435 40.7952L136.809 22.0529C135.729 17.6782 131.582 14.8995 126.747 14.8477L125.482 9.72242C125.482 9.72242 122.939 -10.3172 61.2718 7.61917L59.2856 8.19686C-2.39385 26.1368 4.64704 44.868 4.64704 44.868L5.91219 49.9933C1.75445 52.686 -0.559961 57.3314 0.517013 61.6944L5.14346 80.4366C6.22621 84.823 10.3732 87.6018 15.2489 87.6418C33.7249 162.08 70.023 308.365 72.119 316.856C74.5972 326.896 79.0067 333.671 37.9162 380.581C-3.17423 427.492 12.5513 479.99 12.5513 479.99C12.5513 479.99 157.013 1027.56 176.568 1107.95C196.114 1188.36 339.592 1139.48 339.592 1139.48C339.592 1139.48 486.363 1103.93 466.256 1023.71C446.16 943.469 319.047 390.856 319.047 390.856C319.061 390.852 308.471 336.863 251.288 318.521L251.292 318.519Z" fill="white" />
                                    <path d="M315.139 389.532C315.2 389.765 315.255 389.98 315.305 390.176L315.674 391.779L319.047 390.856C315.674 391.779 315.674 391.781 315.675 391.785L315.679 391.804L315.697 391.88L315.766 392.18L316.039 393.367L317.106 398.005C317.531 399.854 318.048 402.097 318.649 404.711C319.371 407.847 320.216 411.518 321.175 415.682C324.69 430.949 329.734 452.849 335.849 479.38C348.08 532.442 364.598 604.027 381.743 678.12C416.028 826.28 452.84 984.537 462.898 1024.7C467.619 1043.53 462.607 1059.68 452.222 1073.56C441.737 1087.57 425.784 1099.24 408.898 1108.58C392.056 1117.9 374.549 1124.77 361.219 1129.32C354.562 1131.59 348.967 1133.28 345.042 1134.39C343.08 1134.95 341.536 1135.36 340.488 1135.64C339.964 1135.77 339.564 1135.88 339.297 1135.94C339.174 1135.97 339.079 1136 339.014 1136.01L338.998 1136.02L338.926 1136.03L338.91 1136.04L338.907 1136.04L338.752 1136.08L338.601 1136.13L338.598 1136.13L338.582 1136.13L338.512 1136.16C338.448 1136.18 338.35 1136.21 338.219 1136.26C337.957 1136.34 337.563 1136.47 337.046 1136.64C336.012 1136.97 334.484 1137.45 332.529 1138.03C328.616 1139.2 322.995 1140.77 316.184 1142.42C302.546 1145.72 284.219 1149.27 265.341 1150.34C246.412 1151.41 227.224 1149.97 211.688 1143.52C196.299 1137.13 184.521 1125.87 179.932 1106.99L176.568 1107.95L179.932 1106.99C170.144 1066.75 129.129 909.714 90.5746 762.795C71.2943 689.324 52.6252 618.364 38.7763 565.773C31.8518 539.477 26.1323 517.774 22.1439 502.644C20.1497 495.079 18.5883 489.158 17.5254 485.127L16.3133 480.531L16.003 479.355L15.9245 479.058L15.9048 478.983L15.8999 478.964C15.8988 478.96 15.8982 478.958 12.5513 479.99L15.8982 478.958L15.8835 478.902L15.8681 478.851L15.8678 478.85L15.8677 478.849L15.8669 478.847L15.8632 478.834C15.8583 478.817 15.8498 478.788 15.8381 478.746C15.8145 478.663 15.7779 478.531 15.7302 478.352C15.6349 477.993 15.4957 477.445 15.3302 476.722C14.9992 475.277 14.5633 473.134 14.162 470.408C13.3588 464.95 12.6978 457.177 13.2814 447.98C14.447 429.611 20.569 405.596 40.4617 382.886C61.0095 359.427 70.5489 345.612 74.5289 336.194C76.5665 331.373 77.2059 327.576 77.0591 324.171C76.9441 321.502 76.3224 319.124 75.798 317.118C75.6854 316.687 75.5773 316.274 75.4797 315.878C73.383 307.384 37.084 161.095 18.6085 86.6599L17.9799 84.1272L15.3996 84.1061C11.701 84.0757 9.13594 82.0184 8.50419 79.4591L3.87775 60.7169C3.25271 58.1848 4.52425 55.0118 7.6928 52.9597L9.89448 51.5339L9.27292 49.0158L8.00776 43.8906L7.95861 43.6914L7.92731 43.6081C7.92005 43.5745 7.90892 43.5166 7.89825 43.4355C7.86621 43.1922 7.83654 42.729 7.93465 42.0711C8.12515 40.7935 8.83649 38.5273 11.4053 35.5373C16.6549 29.4269 29.4916 20.5047 60.1244 11.5949L62.1106 11.0172C92.737 2.10926 107.964 2.86892 115.327 5.31122C118.93 6.50638 120.591 8.08296 121.345 9.08629C121.734 9.60294 121.922 10.0203 122.006 10.2484C122.035 10.3245 122.052 10.3808 122.061 10.4138L122.072 10.5018L122.121 10.6999L123.386 15.8252L124.011 18.3557L126.588 18.3833C130.248 18.4225 132.818 20.4786 133.448 23.0304L138.075 41.7726C138.704 44.3215 137.416 47.5078 134.227 49.545L132.005 50.9646L132.627 53.4973C141.693 90.3958 155.086 144.941 166.549 191.628C178.226 239.185 187.9 278.586 188.958 282.872C189.056 283.269 189.153 283.686 189.254 284.122C189.723 286.14 190.279 288.534 191.407 290.906C192.847 293.935 195.148 296.876 199.133 299.947C205.874 305.143 217.748 310.931 239.39 318.339L239.213 318.391L250.144 321.897C277.828 330.777 294.196 348.255 303.671 363.531C308.414 371.179 311.424 378.27 313.242 383.431C314.151 386.01 314.76 388.102 315.139 389.532Z" stroke="#A12B4E" stroke-opacity="0.2" stroke-width="3.41" />
                                 </svg>
                                 <svg class="bottle bottle4" viewBox="0 0 469 844" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M251.292 318.519C194.087 300.2 194.794 291.923 192.319 281.895C190.223 273.403 154.289 127.012 135.989 52.5236C140.18 49.8466 142.518 45.1815 141.435 40.7952L136.809 22.0529C135.729 17.6782 131.582 14.8995 126.747 14.8477L125.482 9.72242C125.482 9.72242 122.939 -10.3172 61.2718 7.61917L59.2856 8.19686C-2.39385 26.1368 4.64704 44.868 4.64704 44.868L5.91219 49.9933C1.75445 52.686 -0.559961 57.3314 0.517013 61.6944L5.14346 80.4366C6.22621 84.823 10.3732 87.6018 15.2489 87.6418C33.7249 162.08 70.023 308.365 72.119 316.856C74.5972 326.896 79.0067 333.671 37.9162 380.581C-3.17423 427.492 12.5513 479.99 12.5513 479.99C12.5513 479.99 157.013 1027.56 176.568 1107.95C196.114 1188.36 339.592 1139.48 339.592 1139.48C339.592 1139.48 486.363 1103.93 466.256 1023.71C446.16 943.469 319.047 390.856 319.047 390.856C319.061 390.852 308.471 336.863 251.288 318.521L251.292 318.519Z" fill="white" />
                                    <path d="M315.139 389.532C315.2 389.765 315.255 389.98 315.305 390.176L315.674 391.779L319.047 390.856C315.674 391.779 315.674 391.781 315.675 391.785L315.679 391.804L315.697 391.88L315.766 392.18L316.039 393.367L317.106 398.005C317.531 399.854 318.048 402.097 318.649 404.711C319.371 407.847 320.216 411.518 321.175 415.682C324.69 430.949 329.734 452.849 335.849 479.38C348.08 532.442 364.598 604.027 381.743 678.12C416.028 826.28 452.84 984.537 462.898 1024.7C467.619 1043.53 462.607 1059.68 452.222 1073.56C441.737 1087.57 425.784 1099.24 408.898 1108.58C392.056 1117.9 374.549 1124.77 361.219 1129.32C354.562 1131.59 348.967 1133.28 345.042 1134.39C343.08 1134.95 341.536 1135.36 340.488 1135.64C339.964 1135.77 339.564 1135.88 339.297 1135.94C339.174 1135.97 339.079 1136 339.014 1136.01L338.998 1136.02L338.926 1136.03L338.91 1136.04L338.907 1136.04L338.752 1136.08L338.601 1136.13L338.598 1136.13L338.582 1136.13L338.512 1136.16C338.448 1136.18 338.35 1136.21 338.219 1136.26C337.957 1136.34 337.563 1136.47 337.046 1136.64C336.012 1136.97 334.484 1137.45 332.529 1138.03C328.616 1139.2 322.995 1140.77 316.184 1142.42C302.546 1145.72 284.219 1149.27 265.341 1150.34C246.412 1151.41 227.224 1149.97 211.688 1143.52C196.299 1137.13 184.521 1125.87 179.932 1106.99L176.568 1107.95L179.932 1106.99C170.144 1066.75 129.129 909.714 90.5746 762.795C71.2943 689.324 52.6252 618.364 38.7763 565.773C31.8518 539.477 26.1323 517.774 22.1439 502.644C20.1497 495.079 18.5883 489.158 17.5254 485.127L16.3133 480.531L16.003 479.355L15.9245 479.058L15.9048 478.983L15.8999 478.964C15.8988 478.96 15.8982 478.958 12.5513 479.99L15.8982 478.958L15.8835 478.902L15.8681 478.851L15.8678 478.85L15.8677 478.849L15.8669 478.847L15.8632 478.834C15.8583 478.817 15.8498 478.788 15.8381 478.746C15.8145 478.663 15.7779 478.531 15.7302 478.352C15.6349 477.993 15.4957 477.445 15.3302 476.722C14.9992 475.277 14.5633 473.134 14.162 470.408C13.3588 464.95 12.6978 457.177 13.2814 447.98C14.447 429.611 20.569 405.596 40.4617 382.886C61.0095 359.427 70.5489 345.612 74.5289 336.194C76.5665 331.373 77.2059 327.576 77.0591 324.171C76.9441 321.502 76.3224 319.124 75.798 317.118C75.6854 316.687 75.5773 316.274 75.4797 315.878C73.383 307.384 37.084 161.095 18.6085 86.6599L17.9799 84.1272L15.3996 84.1061C11.701 84.0757 9.13594 82.0184 8.50419 79.4591L3.87775 60.7169C3.25271 58.1848 4.52425 55.0118 7.6928 52.9597L9.89448 51.5339L9.27292 49.0158L8.00776 43.8906L7.95861 43.6914L7.92731 43.6081C7.92005 43.5745 7.90892 43.5166 7.89825 43.4355C7.86621 43.1922 7.83654 42.729 7.93465 42.0711C8.12515 40.7935 8.83649 38.5273 11.4053 35.5373C16.6549 29.4269 29.4916 20.5047 60.1244 11.5949L62.1106 11.0172C92.737 2.10926 107.964 2.86892 115.327 5.31122C118.93 6.50638 120.591 8.08296 121.345 9.08629C121.734 9.60294 121.922 10.0203 122.006 10.2484C122.035 10.3245 122.052 10.3808 122.061 10.4138L122.072 10.5018L122.121 10.6999L123.386 15.8252L124.011 18.3557L126.588 18.3833C130.248 18.4225 132.818 20.4786 133.448 23.0304L138.075 41.7726C138.704 44.3215 137.416 47.5078 134.227 49.545L132.005 50.9646L132.627 53.4973C141.693 90.3958 155.086 144.941 166.549 191.628C178.226 239.185 187.9 278.586 188.958 282.872C189.056 283.269 189.153 283.686 189.254 284.122C189.723 286.14 190.279 288.534 191.407 290.906C192.847 293.935 195.148 296.876 199.133 299.947C205.874 305.143 217.748 310.931 239.39 318.339L239.213 318.391L250.144 321.897C277.828 330.777 294.196 348.255 303.671 363.531C308.414 371.179 311.424 378.27 313.242 383.431C314.151 386.01 314.76 388.102 315.139 389.532Z" stroke="#A12B4E" stroke-opacity="0.1" stroke-width="3.41" />
                                 </svg>
                              </div>
                           </div>

                           <div class="products-descr__content">
                              <h2 class="page-title products-descr__title">
                                 <?php the_field('products_title'); ?>
                              </h2>
                              <p class="products-descr__text">
                                 <?php the_field('products_text'); ?>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php if (have_rows('products_card')) : ?>
                     <?php while (have_rows('products_card')) : the_row(); ?>
                        <?php $products_img = get_sub_field('products_card_img'); ?>
                        <?php $products_title = get_sub_field('products_card_title'); ?>

                        <div class="swiper-slide products-swiper__slide">
                           <div class="products-swiper__content">
                              <div class="products-swiper__top">
                                 <div class="products-swiper__circle">
                                    <div class="products-swiper__wrapper">
                                       <img loading="lazy" src="<?php echo $products_img; ?>" class="image" alt="Product" />
                                       <div class="products-swiper__circle-red"></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="products-swiper__bottom">
                                 <h2 class="products-swiper__title"><?php echo $products_title; ?></h2>
                                 <ul class="products-swiper__list list-reset">
                                    <?php if (have_rows('products_card_list')) : ?>
                                       <?php while (have_rows('products_card_list')) : the_row(); ?>
                                          <?php $products_list_name = get_sub_field('products_card_name'); ?>
                                          <li class="products-swiper__item"><?php echo $products_list_name; ?></li>
                                       <?php endwhile; ?>
                                    <?php endif; ?>
                                 </ul>
                                 <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                                    <a href="<?php echo home_url('/catalog'); ?>" class="products-swiper__btn products-swiper__btn--tab btn-primary btn-reset">
                                       ?????????????? ??????????????????
                                    </a>
                                 <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                    <a href="<?php echo home_url('/en/catalog'); ?>" class="products-swiper__btn products-swiper__btn--tab btn-primary btn-reset">
                                       Go to catalog
                                    </a>
                                 <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                                    <a href="<?php echo home_url('/ge/catalog'); ?>" class="products-swiper__btn products-swiper__btn--tab btn-primary btn-reset">
                                       ??????????????????????????? ????????????????????????
                                    </a>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                     <?php endwhile; ?>
                  <?php endif; ?>
               </div>

               <div class="slider-btns">
                  <div class="slider-prev products-prev">
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#left"></use>
                     </svg>
                  </div>
                  <div class="slider-next products-next">
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#right"></use>
                     </svg>
                  </div>
               </div>
            </div>
            <a href="catalog-page.html" class="products-swiper__btn products-swiper__btn--mob btn-primary btn-reset">
               ?????????????? ??????????????????
            </a>
         </div>
      </div>
   </section>

   <section class="about main-offset">
      <div class="container about__container">
         <picture>
            <source srcset="<?php the_field('about_img'); ?>" type="image/webp" />
            <img loading="lazy" src="<?php the_field('about_img'); ?>" class="image about-image about-image--tablet" alt="About image" />
         </picture>

         <picture>
            <source srcset="<?php the_field('about_img_mob'); ?>" type="image/webp" />
            <img loading="lazy" src="<?php the_field('about_img_mob'); ?>" class="image about-image about-image--mob" alt="About image" />
         </picture>
         <div class="about-descr">
            <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
               <h2 class="page-title"><?php the_field('about_title'); ?></h2>
            <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
               <h2 class="page-title"><?php the_field('about_title'); ?></h2>
            <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
               <h2 class="page-title page-title--ge"><?php the_field('about_title'); ?></h2>
            <?php endif; ?>
            <ul class="about-descr__list list-reset">
               <?php if (have_rows('about_items')) : ?>
                  <?php while (have_rows('about_items')) : the_row(); ?>
                     <?php $about_item_icon = get_sub_field('about_item_icon'); ?>
                     <?php $about_item_text = get_sub_field('about_item_text'); ?>

                     <li class="about-descr__item about-item">
                        <div class="about-item__icon">
                           <?php echo file_get_contents($about_item_icon); ?>
                        </div>
                        <p class="about-item__text">
                           <?php echo $about_item_text; ?>
                        </p>
                     </li>
                  <?php endwhile; ?>
               <?php endif; ?>
            </ul>
            <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
               <a href="<?php echo home_url('/about'); ?>" class="about-descr__btn btn-primary btn-reset">??????????????????</a>
            <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
               <a href="<?php echo home_url('/en/about'); ?>" class="about-descr__btn btn-primary btn-reset">More</a>
            <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
               <a href="<?php echo home_url('/ge/about'); ?>" class="about-descr__btn btn-primary btn-reset">????????????</a>
            <?php endif; ?>
         </div>
      </div>
   </section>


   <section class="partners main-offset">
      <div class="container partners__container">
         <div class="partners-block__descr">
            <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
               <h2 class="partners-block__title page-title"><?php the_field('partners_title'); ?></h2>
            <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
               <h2 class="partners-block__title page-title"><?php the_field('partners_title'); ?></h2>
            <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
               <h2 class="partners-block__title page-title page-title--ge"><?php the_field('partners_title'); ?></h2>
            <?php endif; ?>
            <p class="partners-block__text">
               <?php the_field('partners_text'); ?>
            </p>
            <div class="partners-block__animation">
               <div class="partners-block__animation-image">
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#barrel"></use>
                  </svg>
               </div>
               <div class="partners-block__animation-text">
                  <p>
                     <?php the_field('partners_text2'); ?>
                  </p>
                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <a href="<?php echo home_url('/about'); ?>" class="btn-primary btn-reset">??????????????????</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <a href="<?php echo home_url('/en/about'); ?>" class="btn-primary btn-reset">More</a>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <a href="<?php echo home_url('/ge/about'); ?>" class="btn-primary btn-reset">??????????????????????????? ????????????????????????</a>
                  <?php endif; ?>
               </div>
            </div>
         </div>
         <div class="partners-block__red">
            <div class="partners-block__red-image">
               <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/partners2.webp" type="image/webp" />
                  <img loading="lazy" src="img/partners2.png" class="image" alt="Cork" />
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
                        ?????????? ?????????????????????????
                     </h3>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <h3 class="modal-content__title feedback-content__title">
                        Need a consultation?
                     </h3>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <h3 class="modal-content__title feedback-content__title feedback-content__title--ge">
                        ??????????????????????????? ??????????????????????????????????
                     </h3>
                  <?php endif; ?>


                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <p class="modal-content__text feedback-content__text">
                        ???????????????? ????????????, ??????<span>???????????? ????????????????????</span> ?????????????????? ????????????
                        ??????????????
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <p class="modal-content__text feedback-content__text">
                        Need a consultation?
                        Leave a request we will call you back quickly and answer all your questions
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <p class="modal-content__text feedback-content__text">
                        ????????????????????? ???????????????????????????, ???????????? ????????????????????? ??????????????????????????????????????? ?????? ?????????????????????????????? ?????????????????? ??????????????? ?????????????????????
                     </p>
                  <?php endif; ?>
                  <div class="form">
                     <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                        <?php echo do_shortcode('[contact-form-7 id="329" title="???????????????????? ?????????? RU"]'); ?>
                     <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                        <?php echo do_shortcode('[contact-form-7 id="331" title="???????????????????? ?????????? EN"]'); ?>
                     <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                        <?php echo do_shortcode('[contact-form-7 id="332" title="???????????????????? ?????????? GE"]'); ?>
                     <?php endif; ?>
                  </div>

                  <?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
                     <p class="form__text">
                        ?????????????? ???????????? ?????????????????? ?????????????? ???????????????? ???????????????? ????????????????????????
                        ?????????? ???????????????????????? ????????????
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                     <p class="form__text">
                        By clicking the ???Submit a request??? button You consent to the processing of your personal data
                     </p>
                  <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                     <p class="form__text">
                        ????????????????????? ????????????????????????????????? ??????????????????????????? ???????????????????????????????????? ??????????????? ?????????????????????????????? ?????????????????? ????????????????????????????????? ????????????????????????????????? ?????????????????????????????????
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
            <h2 class="page-title new-products__title">?????????? ????????????????</h2>
         <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
            <h2 class="page-title new-products__title">New products</h2>
         <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
            <h2 class="page-title new-products__title">??????????????? ??????????????????????????????</h2>
         <?php endif; ?>

         <div class="swiper new-products-swiper">
            <div class="swiper-wrapper new-products-swiper__wrapper">
               <?php
               $args = array(
                  'post_type' => 'products',
                  'posts_per_page' => 10,
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
                           <a href="<?php echo esc_url(get_permalink()); ?>" class="btn-reset btn-primary product-btn">??????????????????</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                           <a href="<?php echo esc_url(get_permalink()); ?>" class="btn-reset btn-primary product-btn">More</a>
                        <?php elseif (ICL_LANGUAGE_CODE == 'ge') : ?>
                           <a href="<?php echo esc_url(get_permalink()); ?>" class="btn-reset btn-primary product-btn">????????????</a>
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

</main>


<?php

get_footer();
