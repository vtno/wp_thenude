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

