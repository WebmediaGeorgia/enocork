<?php

/**
 * enocork functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package enocork
 */

if (!defined('_S_VERSION')) {
   // Replace the version number of the theme on each release.
   define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function enocork_setup()
{
   /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on enocork, use a find and replace
		* to change 'enocork' to the name of your theme in all the template files.
		*/
   load_theme_textdomain('enocork', get_template_directory() . '/languages');

   // Add default posts and comments RSS feed links to head.
   add_theme_support('automatic-feed-links');

   /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
   add_theme_support('title-tag');

   /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
   add_theme_support('post-thumbnails');


   register_nav_menus(
      array(
         'header_menu' => esc_html__('header-menu', 'enocork'),
      )
   );

   /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
   add_theme_support(
      'html5',
      array(
         'search-form',
         'comment-form',
         'comment-list',
         'gallery',
         'caption',
         'style',
         'script',
      )
   );

   // Set up the WordPress core custom background feature.
   add_theme_support(
      'custom-background',
      apply_filters(
         'enocork_custom_background_args',
         array(
            'default-color' => 'ffffff',
            'default-image' => '',
         )
      )
   );

   // Add theme support for selective refresh for widgets.
   add_theme_support('customize-selective-refresh-widgets');

   /**
    * Add support for core custom logo.
    *
    * @link https://codex.wordpress.org/Theme_Logo
    */
   add_theme_support(
      'custom-logo',
      array(
         'height'      => 250,
         'width'       => 250,
         'flex-width'  => true,
         'flex-height' => true,
      )
   );
}
add_action('after_setup_theme', 'enocork_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function enocork_content_width()
{
   $GLOBALS['content_width'] = apply_filters('enocork_content_width', 640);
}
add_action('after_setup_theme', 'enocork_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function enocork_widgets_init()
{
   register_sidebar(array(
      'name' => esc_html__('Переключатель языка', 'lotos'),
      'id' => 'lang-sw',
      'description' => esc_html__('add please widget lang swither', 'lotos'),
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => '',
   ));
}
add_action('widgets_init', 'enocork_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function enocork_scripts()
{
   wp_enqueue_style('enocork-style', get_stylesheet_uri(), array(), _S_VERSION);
   wp_style_add_data('enocork-style', 'rtl', 'replace');
   wp_enqueue_style('enocork-vendor-css', get_template_directory_uri() . '/assets/css/vendor.css', array(), _S_VERSION);
   wp_enqueue_style('enocork-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);

   wp_enqueue_script('enocork-main-js', get_template_directory_uri() . '/assets/js/main.js', 'defer', array(), _S_VERSION, true);


   if (is_singular() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
   }
}
add_action('wp_enqueue_scripts', 'enocork_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/enocork-customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
   require get_template_directory() . '/inc/jetpack.php';
}


// Register Sidebar
function textdomain_register_sidebars()
{
   if (function_exists('register_sidebar')) {

      // Custom footer section for copyright. Empty by default.
      register_sidebar(array(
         'name' => esc_html__('Переключатель языка', 'lotos'),
         'id' => 'lang-sw',
         'description' => esc_html__('add please widget lang swither', 'lotos'),
         'before_widget' => '',
         'after_widget' => '',
         'before_title' => '',
         'after_title' => '',
      ));
   }
}
add_action('widgets_init', 'textdomain_register_sidebars');


//Старый дизайн виджетов
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');

//Убираем admin bar
show_admin_bar(false);


//Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function ($title) {
   return preg_replace('~^[^:]+: ~', '', $title);
});



//Регистрируем post type
function enocork_register_post_type()
{
   $args = array(
      'hierarchical' => true,
      'labels' => array(
         'name'              => esc_html_x('Категории', 'taxonomy general name', 'enocork'),
         'singular_name'     => esc_html_x('Категория', 'taxonomy singular name', 'enocork'),
         'search_items'      => esc_html__('Поиск категории', 'enocork'),
         'all_items'         => esc_html__('Все категории', 'enocork'),
         'parent_item'       => esc_html__('Родительская категория', 'enocork'),
         'parent_item_colon' => esc_html__('Parent Genre:', 'enocork'),
         'edit_item'         => esc_html__('Редактировать категорию', 'enocork'),
         'update_item'       => esc_html__('Обновить категорию', 'enocork'),
         'add_new_item'      => esc_html__('Добавить новую категорию', 'enocork'),
         'new_item_name'     => esc_html__('Новая категория', 'enocork'),
         'menu_name'         => esc_html__('Категории товаров', 'enocork'),
      ),
      'show_ui' => true,
      'rewrite' => array('slug' => 'categories'),
      'query_var' => true,
      'show_in_rest' => true,
      'show_admin_column' => true
   );

   register_taxonomy('type', array('products'), $args);

   unset($args);

   $args = array(
      'label' => esc_html__('Products'),
      'labels' => array(
         'name'                  => esc_html_x('Products', 'Post type general name', 'enocork'),
         'singular_name'         => esc_html_x('Product', 'Post type singular name', 'enocork'),
         'menu_name'             => esc_html_x('Products', 'Admin Menu text', 'enocork'),
         'name_admin_bar'        => esc_html_x('Product', 'Add New on Toolbar', 'enocork'),
         'add_new'               => esc_html__('Add New', 'enocork'),
         'add_new_item'          => esc_html__('Add New Product', 'enocork'),
         'new_item'              => esc_html__('New Product', 'enocork'),
         'edit_item'             => esc_html__('Edit Product', 'enocork'),
         'view_item'             => esc_html__('View Product', 'enocork'),
         'all_items'             => esc_html__('All Products', 'enocork'),
         'search_items'          => esc_html__('Search Products', 'enocork'),
         'parent_item_colon'     => esc_html__('Parent Products:', 'enocork'),
         'not_found'             => esc_html__('No Products found.', 'enocork'),
         'not_found_in_trash'    => esc_html__('No Products found in Trash.', 'enocork'),
         'featured_image'        => esc_html_x('Product Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'enocork'),
         'set_featured_image'    => esc_html_x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'enocork'),
         'remove_featured_image' => esc_html_x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'enocork'),
         'use_featured_image'    => esc_html_x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'enocork'),
         'archives'              => esc_html_x('Product archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'enocork'),
         'insert_into_item'      => esc_html_x('Insert into Product', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'enocork'),
         'uploaded_to_this_item' => esc_html_x('Uploaded to this Product', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'enocork'),
         'filter_items_list'     => esc_html_x('Filter Products list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'enocork'),
         'items_list_navigation' => esc_html_x('Products list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'enocork'),
         'items_list'            => esc_html_x('Products list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'enocork'),
      ),
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => true,
      'hierarchical' => true,
   );

   register_post_type('products', $args);
}
add_action('init', 'enocork_register_post_type');


//Убираем сообщение из консоли JQMIGRATE: Migrate is installed, version 3.3.2
add_action('wp_default_scripts', function ($scripts) {
   if (!empty($scripts->registered['jquery'])) {
      $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
   }
});
