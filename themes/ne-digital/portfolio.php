<?php /* Template Name: PORTFOLIO */ get_header(); ?>
<main role="main">
    <div class="page-bar">
        <div class="page-header">
            <h2><?php the_title(); ?></h2>
        </div>

        <div class="sidebar-widget">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
            <a class="view-all" href="<?php echo get_permalink(16); ?>">VIEW ALL</a>
        </div>
    </div>
    <div class="portfolio-section">
        <?php echo get_field('nimble_shortcode'); ?>

    </main>


<?php get_template_part('sub', 'footer'); ?>
<?php get_footer(); ?>