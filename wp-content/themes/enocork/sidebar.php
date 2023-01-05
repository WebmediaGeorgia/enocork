<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enocork
 */

if (!is_active_sidebar('lang-sw')) {
   return;
}
?>

<aside id="secondary" class="widget-area">
   <?php dynamic_sidebar('lang-sw'); ?>
</aside><!-- #secondary -->