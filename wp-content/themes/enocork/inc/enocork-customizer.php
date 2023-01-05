<?php
function lotos_sanitize_default($value)
{
   return $value;
}
/** Lotos - Customizer - Add Settings */
function lotos_register_theme_customizer($wp_customize)
{
   /** Add Sections -----------------------------------------------------------------------------------------------------------*/
   $wp_customize->add_section('social_links', array(
      'title'       => esc_html__('Ссылки для социальных сетей', 'lotos'),
      'description' => esc_html__('Вставьте ссылку', 'lotos')
   ));

   $wp_customize->add_section('qr_code', array(
      'title'       => esc_html__('QR Code', 'lotos'),
      'description' => esc_html__('Картинка вашего qr code', 'lotos')
   ));

   $wp_customize->add_section('map', array(
      'title'       => esc_html__('Ссылка и картинка для карты', 'lotos'),
      'description' => esc_html__('Вставьте ссылку и загрузите изображение', 'lotos')
   ));


   $wp_customize->add_section('footer_copyright', array(
      'title'       => esc_html__('Копирайт в подвале сайта', 'lotos'),
      'description' => esc_html__('Введите копирайт', 'lotos')
   ));

   /** Add Settings ------------------------------------------------------------------------------------------------------------*/
   // Социальные сети
   $wp_customize->add_setting(
      'phone_link',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'phone_link',
         array(
            'label'      => esc_html__('Вставьте номер телефона. В формате "+123456789", без пробелов', 'lotos'),
            'section'    => 'social_links',
            'settings'   => 'phone_link',
            'type'       => 'text',
            'priority'    => 1
         )
      )
   );

   $wp_customize->add_setting(
      'phone_number',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'phone_number',
         array(
            'label'      => esc_html__('Вставьте номер телефона', 'lotos'),
            'section'    => 'social_links',
            'settings'   => 'phone_number',
            'type'       => 'text',
            'priority'    => 1
         )
      )
   );

   $wp_customize->add_setting(
      'mail_link',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'mail_link',
         array(
            'label'      => esc_html__('Вставьте свою почту', 'lotos'),
            'section'    => 'social_links',
            'settings'   => 'mail_link',
            'type'       => 'text',
            'priority'    => 1
         )
      )
   );

   $wp_customize->add_setting(
      'whatsapp_link',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'whatsapp_link',
         array(
            'label'      => esc_html__('Вставьте ссылку на свой Whatsapp', 'lotos'),
            'section'    => 'social_links',
            'settings'   => 'whatsapp_link',
            'type'       => 'text',
            'priority'    => 1
         )
      )
   );

   $wp_customize->add_setting(
      'telegram_link',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'telegram_link',
         array(
            'label'      => esc_html__('Вставьте ссылку на свой Telegram', 'lotos'),
            'section'    => 'social_links',
            'settings'   => 'telegram_link',
            'type'       => 'text',
            'priority'    => 1
         )
      )
   );

   //QR Code
   $wp_customize->add_setting(
      'footer_qr_code',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'footer_qr_code',
         array(
            'label'      => esc_html__('Загрузите картинку для QR code', 'lotos'),
            'section'    => 'qr_code',
            'settings'   => 'footer_qr_code',
            'priority'    => 1
         )
      )
   );

   //Copyright
   $wp_customize->add_setting(
      'copyright',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'copyright',
      array(
         'label'      => esc_html__('', 'lotos'),
         'section'    => 'footer_copyright',
         'settings'   => 'copyright',
         'type'       => 'text',
         'priority'    => 2
      )
   );

   //link map
   $wp_customize->add_setting(
      'map_link',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'map_link',
      array(
         'label'      => esc_html__('Вставьте ссылку на карту', 'lotos'),
         'section'    => 'map',
         'settings'   => 'map_link',
         'type'       => 'link',
         'priority'    => 2
      )
   );

   $wp_customize->add_setting(
      'map_img',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'map_img',
         array(
            'label'      => esc_html__('Загрузите картинку для карты', 'lotos'),
            'section'    => 'map',
            'settings'   => 'map_img',
            'priority'    => 1
         )
      )
   );
}


add_action('customize_register', 'lotos_register_theme_customizer');
