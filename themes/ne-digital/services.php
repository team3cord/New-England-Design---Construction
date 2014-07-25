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
                             <h2><?php the_sub_field('section_title'); ?></h2>
                                <span class="thick-line"></span><span class="thin-line"></span>
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
                    <h2><?php echo get_field('call_today_consultation', 4); ?></h2>
                    <span class="thick-line"></span><span class="thin-line"></span></br>
                    <div class="call-tout">
                        <?php echo get_field('call_today_tout'); ?>
                    </div>
                    <a href="tel:<?php echo get_field('call_today_phone', 4); ?>"><?php echo get_field('call_today_phone', 4); ?></a>
                </div>
                <div class="right-testimonial">
                    <h2><?php echo get_field('sidebar_header', 4); ?></h2>
                    <span class="thick-line"></span><span class="thin-line"></span>
                    <div class="home-sidebar-content">
                        <?php echo do_shortcode("[testimonial_rotator id='40']"); ?>
                    </div>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/guild-quality.png"></a>
                </div>

        </aside>
        <div class="weird-line"></div>





    </main>


<?php get_footer(); ?>