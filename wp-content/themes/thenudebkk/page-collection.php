<?php
/*
  Template Name: Collection page
 */
?>
<?php get_header(); ?>
<section class = "row margin-bot-2per">
    <div class="col-lg-12">
        <img src="<?php bloginfo('template_url') ?>/images/banner.jpg" class = "img-responsive">        
    </div>
</section>
<section class ="row">
    <?php echo do_shortcode('[collection-product id = "20"]'); ?>
    <?php echo do_shortcode('[collection-product id = "39"]'); ?>
</section>


<?php get_footer(); ?>