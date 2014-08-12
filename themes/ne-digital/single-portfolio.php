<?php get_header(); ?>

<main role="main">
    <div class="page-bar">
        <div class="page-header">
            <h2><?php the_title(); ?></h2>
        </div>

    </div>
    <div class="main-section">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



                <?php the_content(); // Dynamic Content ?>



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
        <div class="nimble-description">
            <h3><?php echo get_field('project_description_title'); ?></h3>
            <span class="thick-line"></span><span class="thin-line"></span></br>
            <div class="project-content">
                <?php echo get_field('project_content'); ?>
            </div>
        </div>
        <div class="single-pro right-call-today">
            <h3><?php echo get_field('call_today_consultation', 4); ?></h3>
            <span class="thick-line"></span><span class="thin-line"></span></br>
            <div class="call-tout">
                <?php echo get_field('call_today_tout', 16); ?>
            </div>
            <a class="orange-phone" href="tel:<?php echo get_field('call_today_phone', 4); ?>"><?php echo get_field('call_today_phone', 4); ?></a></br>
            <a class="btn-contact" href="/contact"><?php echo get_field('contact_button_text', 8); ?></a>

        </div>


    </aside>
    <div class="weird-line"></div>

</main>


<?php get_template_part('sub', 'footer'); ?>
<script>
    jQuery(function($){
        $('#menu-item-20').addClass('current-menu-item');
    });
</script>
<?php get_footer(); ?>
