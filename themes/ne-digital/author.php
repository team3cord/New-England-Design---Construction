<?php get_header(); ?>
<main role="main">
    <div class="page-bar">
        <div class="page-header">
            <h2><?php  echo get_the_author(); ?></h2>
        </div>

        <div class="sidebar-widget">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
            <a class="view-all" href="<?php echo get_permalink(16); ?>">VIEW ALL</a>
        </div>
    </div>
    <div class="main-section">
            <?php if (have_posts()): the_post(); ?>

			<h1><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
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

			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

			<?php get_template_part('pagination'); ?>





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
