<?php  /* Template Name: HOME */ get_header(); ?>

<div class="home-slide">
    <?//php echo get_field('home_slider'); ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/kitchen-1.png">
</div>
<div class="home-drop">
    <h1><?php echo get_field('drop_down_header'); ?></h1>
    <a href="#"><?php echo get_field('drop_down_button'); ?></a>
    <div class="drop-content">
        <?php echo get_field('drop_down_content'); ?>
    </div>
</div>
<aside class="home-sidebar">
    <h2><?php echo get_field('sidebar_header'); ?></h2>
    <div class="home-sidebar-content">
        <?php echo get_field('sidebar_content'); ?>
    </div>
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/guild-quality.png"></a>
</aside>
<aside class="left-call-today">
    <h2><?php echo get_field('call_today_consultation'); ?></h2>
    <a href="tel:<?php echo get_field('call_today_phone'); ?>"><?php echo get_field('call_today_phone'); ?></a>
</aside>

<h1>IM HOME!</h1>



<?php get_footer(); ?>
