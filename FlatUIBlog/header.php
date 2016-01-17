<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css"> -->
        <!-- Flat-UI Import -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flat-ui.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
      <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <nav id="header" class="navbar navbar-default navbar-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".responsiveOpenNav" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse responsiveOpenNav">
            <?php get_search_form(); ?>
          </div><!--/.navbar-collapse -->
        </div>
      </nav>
      <div class="container">
        <!--
        <div class="navbar-collapse collapse myMenu">
          <?php wp_nav_menu( array(
                  'theme_location'=>'mainmenu',
                  'container'     =>'',
                  'container_class' =>'nav-collapse collapse',
                  'menu_class'    =>'nav',
                  'items_wrap'    =>'<ul class="nn" id="main-nav">%3$s</ul>'));
          ?>
        -->
          <!-- <div class="navbar-right">
            <div class="btn-group">
                    <a href="#fakelink"><img class="navIcons" src="<?php echo get_template_directory_uri(); ?>/img/icons/png/twitter.png"></span></a>
                    <a href="#fakelink"><img class="navIcons" src="<?php echo get_template_directory_uri(); ?>/img/icons/png/github.png"></span></a>
            </div>
          </div> -->
        </div>
      </div>

      <div class="navbar-collapse collapse nav-menu-border">
          <hr>
      </div>
