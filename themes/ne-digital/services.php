<?php /* Template Name: SERVICES */ get_header(); ?>

    <main class="main-content">

        <div class="page-bar">
             <h2><?php the_title(); ?></h2>
        </div>



        <div class="main-section">
            <article class="main-tout">
                <?php echo get_field('service_tout'); ?>
            </article>
            <?php

            // check if the repeater field has rows of data
            if( have_rows('service_repeater') ):

                // loop through the rows of data
                while ( have_rows('service_repeater') ) : the_row();

                    // display a sub field value
                    ?>
                        <article>
                             <h3><?php the_sub_field('section_title'); ?></h3>
                                <span class="thick-line"></span><span class="thin-line"></span><br>
                             <?php the_sub_field('section_content'); ?>
                        </article>
                <?php

                endwhile;

            else :

                // no rows found

            endif;

            ?>
        </div>
        <!-- /section -->
        <aside class="right-sidebar">
                <div class="right-call-today">
                    <h3><?php echo get_field('call_today_consultation', 4); ?></h3>
                    <span class="thick-line"></span><span class="thin-line"></span></br>
                    <div class="call-tout">
                        <?php echo get_field('call_today_tout'); ?>
                    </div>
                    <a class="orange-phone" href="tel:<?php echo get_field('call_today_phone', 4); ?>"><?php echo get_field('call_today_phone', 4); ?></a></br>
                    <a class="btn-contact" href="/contact"><?php echo get_field('contact_button_text'); ?></a>

                </div>
                <div class="right-testimonial">
                    <h3><?php echo get_field('sidebar_header', 4); ?></h3>
                    <span class="thick-line"></span><span class="thin-line"></span>
                    <div class="home-sidebar-content">
                        <?php echo do_shortcode("[testimonial_rotator id='40']"); ?>
                    </div>
                    <a  href="http://www.guildquality.com/NewEnglandDesignConstruction"><img src="<?php echo get_template_directory_uri(); ?>/img/guild-quality.png"></a>
                </div>

        </aside>
        <div class="weird-line"></div>





    </main>

<?php get_template_part('sub', 'footer'); ?>
<?php get_footer(); ?>