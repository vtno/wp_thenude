<?php
/*
  Template Name: Collection page
 */
?>
<?php get_header(); ?>
<section class = "row">
    <div class="col-lg-12">
        <img src="<?php bloginfo('template_url') ?>/images/banner.jpg" class = "img-responsive">        
    </div>
</section>
<section class ="row">
    <div class ="col-lg-6">
        <?php echo do_shortcode('[product id = "20"]');?>
    </div>
    <div class ="col-lg-6">
        <?php echo do_shortcode('[product id = "39"]');?>
    </div>
</section>


<?php get_footer(); ?>