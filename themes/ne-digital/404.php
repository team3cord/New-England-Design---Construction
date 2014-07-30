<?php get_header(); ?>
<main role="main">
    <div class="page-bar">
        <div class="page-header">
            <h2><?php _e( 'Page not found', 'html5blank' ); ?></h2>
        </div>


    </div>
    <div class="main-section">
    <!-- article -->
			<article id="post-404">

                <p>The page you are trying to reach does not exist, or has been moved. Please use the menus to find what you are looking for. </p>
				<h2>
					<a href="<?php echo home_url(); ?>">Return Home?</a>
				</h2>

			</article>
			<!-- /article -->

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
    <div  style="height: 720px; margin-bottom: 70px;" class="weird-line"></div>





</main>

<?php get_template_part('sub', 'footer'); ?>


<?php get_footer(); ?>

