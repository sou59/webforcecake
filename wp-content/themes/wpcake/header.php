<!DOCTYPE html>
<html>
    <head>
        <title>WebForce Cakes</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

        <!-- css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css">

        <!-- google font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    </head>
    <body data-spy="scroll" data-target="#menu" data-offset="120" >

        <nav id="menu" class="navbar navbar-expand-md navbar-dark fixed-top" style="background-image: url(<?php echo get_background_image();  ?>)">>
            <div class="container">
                <a class="navbar-brand" href="#"><h2>WebForce Cakes</h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div id="navbar" class="navbar-collapse collapse"> -->

                    <?php

                        wp_nav_menu(array(
                            "theme_location" => "menu-header",
                            'container' => 'ul',
                            "menu_class" => "navbar-nav navbar-dark  nav-item nav-link a",
                            "container" => "span"
                        ));
                    ?>

                 <!--fix for scroll spy active menu element-->
                        <li style="display:none;"><a href="#header"></a></li>

                    </ul>
                </div><!--/.navbar-collapse -->
            </div><!-- container -->
        </nav><!-- menu -->

        <div id="header">
            <div class="bg-overlay"></div>
            <div class="center text-center">
                <div class="banner">
                    <h1 class=""><?= get_bloginfo("name"); ?></h1>
                </div>
                <div class="subtitle"><h4><?= get_bloginfo("description"); ?></h4></div>
            </div>
            <div class="bottom text-center">
                <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
            </div>
        </div>
        <!-- /#header -->