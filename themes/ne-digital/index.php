<?php  /* Template Name: HOME */ get_header(); ?>
<main class="home-main">

     <div class="home-slide">
        <?php echo get_field('home_slider'); ?>
<!--        <img style="width: 100%;height: 100%;" src="<?php echo get_template_directory_uri(); ?>/img/kitchen-1.png"> -->
    </div>
    <div class="home-drop">
        <div class="drop-tab drop-light">
            <h1><?php echo get_field('drop_down_header'); ?></h1>
            <a class="btn-home-drop" href="<?php echo get_permalink(10)?>"><?php echo get_field('drop_down_button'); ?></a>
        </div>
        <div class="drop-content drop-light">
            <?php echo get_field('drop_down_content'); ?>
        </div>
        <div class="drop-action-div">
            <a class="drop-action down-button" href="#"></a>
        </div>
    </div>
    <aside class="home-sidebar">
        <div class="home-testimonial">
            <h2><?php echo get_field('sidebar_header'); ?></h2>
            <span class="thick-line"></span><span class="thin-line"></span>
            <div class="home-sidebar-content">
                <?php echo do_shortcode("[testimonial_rotator id='40']"); ?>
            </div>
        <a href="http://www.guildquality.com/NewEnglandDesignConstruction"><img src="<?php echo get_template_directory_uri(); ?>/img/guild-quality.png"></a>
        </div>
        <div class="left-call-today">
            <h2><?php echo get_field('call_today_consultation'); ?></h2>
            <span class="thick-line"></span><span class="thin-line"></span></br>
            <a class="orange-phone" href="tel:<?php echo get_field('call_today_phone'); ?>"><?php echo get_field('call_today_phone'); ?></a>
        </div>
        <div class="double-border"></div>
    </aside>


</main>
<script>
    jQuery(function($){
        var dropButton = $('.drop-action');
        var dropContent = $('.drop-content');
        var dropTab = $('.drop-tab');
        dropButton.on('click', function(e){
            e.preventDefault();
            if (dropButton.hasClass('down-button')){
                dropContent.slideDown('slow', function(){
                    dropButton.addClass('up-button').removeClass('down-button');
                    dropTab.addClass('drop-dark').removeClass('drop-light');
                    dropContent.addClass('drop-dark').removeClass('drop-light');
                });
            }
            else if (dropButton.hasClass('up-button')){
                dropContent.slideUp('slow', function(){
                    dropButton.addClass('down-button').removeClass('up-button');
                    dropTab.addClass('drop-light').removeClass('drop-dark');
                    dropContent.addClass('drop-light').removeClass('drop-dark');
                });
            }
        })
    });
</script>
<?php get_footer(); ?>
