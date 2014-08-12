<?php /* Template Name: PORTFOLIO */ get_header(); ?>
<main role="main">

    <div class="portfolio-section">
        <?php echo get_field('nimble_shortcode'); ?>

    </div>
</main>


<?php get_template_part('sub', 'footer'); ?>
    <script>
        jQuery(function($){
            $('.mc-filters a').on('click', function(e){
                e.preventDefault();
                console.log(this);
                $('.view-all').removeClass('cat-active');
            });
        });
    </script>
<?php get_footer(); ?>