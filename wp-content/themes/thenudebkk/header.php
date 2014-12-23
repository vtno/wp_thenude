<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php
            wp_title('|', 'true', 'right');
            bloginfo('name');
            ?>
        </title>
        <link rel ="stylesheet" type ="text/css" href = "<?php bloginfo('template_url'); ?>/clear.css">
        <link rel ="stylesheet" type ="text/css" href = "<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href = "<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap-theme.css">
        <link rel ="stylesheet" type ="text/css" href = "<?php bloginfo('template_url'); ?>/style.css">
        <?php wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/bootstrap/js/bootstrap.min.js") ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class ="container">
            <section class="row margin-bot-2per">
                <div class="col-lg-4">
                   
                    <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                        <div>
                            <label style ="margin-right: 10px;" class="screen-reader-text" for="s"><?php _e(' <span class="glyphicon glyphicon-search" aria-hidden="true"></span>', 'woocommerce'); ?></label>
                            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e('Search for products', 'woocommerce'); ?>" />
                            <input type="submit" id="searchsubmit" value="<?php echo esc_attr__('Search'); ?>" />
                            <input type="hidden" name="post_type" value="product" />
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 pull-right top-logo">
                    <a href ="<?php echo get_option('home'); ?>"><img alt = "Brand" class ="img-responsive" src = "<?php bloginfo('template_url') ?>/images/logo.jpg"/></a>
                </div>
            </section>
            <header>
                <nav class="navbar navbar-default" role = "navigation">
                    <div class="container-fluid">
                        <div class ="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href ="<?php echo get_option('home'); ?>"><img alt = "Brand" class ="img-responsive navbar-brand" src = "<?php bloginfo('template_url') ?>/images/logo.jpg"/></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <?php
                        wp_nav_menu(array(
                            'container_class' => 'collapse navbar-collapse nav-collapse main-nav',
                            'container' => 'div',
                            'container_id' => 'nav-collapse',
                            'menu_class' => 'nav navbar-nav menu',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>

                    </div>

                </nav>
            </header>

