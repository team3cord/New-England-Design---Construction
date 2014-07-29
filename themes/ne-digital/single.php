<?php get_header(); ?>

	<main role="main">
        <div class="page-bar">
            <div class="page-header">
             <h2><?php the_title(); ?></h2>
            </div>
            <div class="main-date">
                <span class=""><?php the_time('F j, Y'); ?></span>
            </div>
        </div>
        <div class="main-section">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



                    <?php the_content(); // Dynamic Content ?>


                    <span class="blog-list-meta">Published <?php the_time('F j, Y'); ?> | By <?php the_author_posts_link(); ?></span><br>
                    <div class="mc-share-this">
                        <span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                        <span class='st_linkedin_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                        <span st_via='@NEDesignConst' st_username='@NEDesignConst' class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                    </div>
                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

            <!-- article -->
            <article>

                <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

            </article>
            <!-- /article -->

            <?php endif; ?>

        </div>
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
            <div class="right-email-signup">
                <h3><?php echo get_field('sidebar_email_header', 16); ?></h3>
                <span class="thick-line"></span><span class="thin-line"></span></br>
                <div class="email-tout">
                    <?php echo get_field('sidebar_email_tout', 16); ?>
                </div>
                <div class="email-form">
                    <?php echo get_field('email_signup-form'); ?>
                </div>
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
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"wp.38898937-6b31-4992-9175-7aa4df929169"});var st_type="wordpress3.9.1";</script>

<?php get_template_part('sub', 'footer'); ?>
<?php get_footer(); ?>
