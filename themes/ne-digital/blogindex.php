<?php /* Template Name: BLOG INDEX */ get_header(); ?>

<main role="main">
        <div class="page-bar">
            <div class="page-header">
             <h2><?php the_title(); ?></h2>
            </div>

            <div class="sidebar-widget">
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
                <a class="view-all" href="<?php echo get_permalink(16); ?>">ALL</a>
            </div>
        </div>
        <div class="main-section">
            <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('showposts=4&post_type=post'.'&paged='.$paged);

                while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>



            <article class="blog-list-post">
                <div class="blog-list-img" >
                    <a href="<?php the_permalink(); ?>"><?the_post_thumbnail('thumbnail'); ?></a>
                </div>
                <div class="blog-list-content">
                    <span class="blog-list-title"><a href="<?php the_permalink(); ?>"><?the_title(); ?></a></span><br>
                    <span class="blog-list-meta">Published <?php the_time('F j, Y'); ?> | By <?php the_author_posts_link(); ?></span><br>
                    <p><?php the_excerpt(); ?></p>
                    <a class="orange-text read-more" href="<?php the_permalink(); ?>">Read More ...</a>
                </div>
            </article>

            <?php endwhile; ?>

            <div class="newer-posts orange-text">

            <?php previous_posts_link('&laquo; Newer Posts') ?></div>

            <div class="older-posts orange-text"><?php next_posts_link('Older Posts &raquo;') ?></div>
            <br><br>


            <?php
            $wp_query = null;
            $wp_query = $temp;  // Reset
            ?>

        </div>
        <!-- /section -->
        <aside class="right-sidebar">
                <div class="right-call-today">
                    <h3><?php echo get_field('call_today_consultation', 4); ?></h3>
                    <span class="thick-line"></span><span class="thin-line"></span></br>
                    <div class="call-tout">
                        <?php echo get_field('call_today_tout', 16); ?>
                    </div>
                    <a class="orange-phone" href="tel:<?php echo get_field('call_today_phone', 4); ?>"><?php echo get_field('call_today_phone', 4); ?></a></br>
                    <a class="btn-contact" href="/contact"><?php echo get_field('contact_button_text', 8); ?></a>

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
