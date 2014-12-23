<?php get_header(); ?>
<section class ="row  margin-bot-2per">
    <div class="flex-container">
        <div class="col-lg-4 flex-container">
            <img src="<?php bloginfo('template_url') ?>/images/1.jpg" class = "img-responsive flex-cell-top margin-bot-2per">
            <img src="<?php bloginfo('template_url') ?>/images/33.jpg" class = "img-responsive flex-cell-bot">
            <div class="flex-cell-bot border">
                <h4 class="h4 flex-cell-bot">Wonderful Christmas Collection</h4>
                <p>Our best selection for this winter. Christmas theme clothes are awesome!</p>
            </div>
        </div>
        <div class="col-lg-8 flex-cell-top margin-bot-mobile">
            <img src="<?php bloginfo('template_url') ?>/images/35.jpg" class = "img-responsive">
        </div>
    </div>
</section>
<section class ="margin-bot-2per">
    <h1 class ="h1">New Arrivals</h1>
</section>
<section class ="row  margin-bot-2per">
    <?php echo do_shortcode('[home_recent_products per_page="4" columns="4"]'); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>