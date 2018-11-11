<!DOCTYPE html>
<html lang="mx">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="copyright" content="Copyright © <?php echo date('Y'); ?> Tierra Azteca">

    <!-- SITE TITLE
    ================================================== -->
    <title><?php wp_title(''); ?> Tierra Azteca</title>

    <!-- FAVICONS
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- SEO INFO
    ================================================== -->
    <meta name="description" content="Tierra Azteca es una empresa que fabrica y comercializa alimentos saludables mediante máquinas de vending.">
    <meta name="keywords" content="máquinas vending, vending toluca, vending méxico, venta máquinas vending, vending méxico, vending machines en mexico, vending machines bimbo">
    <meta name="author" content="Iconica Studio">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- NAV BAR
================================================== -->
<section id="green-logo" class="d-flex align-items-end hidden-sm-down">
    <div class="container">
        <div class="row">
            <div class="col-md-2 d-flex align-items-center">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/grupo-azteca.png" alt="" class="img-fluid">
                </a>
            </div>
            <?php 
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'nav',
                    'container_class' => 'col-12 col-md-10 d-flex justify-content-end',
                    'container_id'    => '',
                    'menu_class'      => 'col-12 col-md-10 d-flex justify-content-end',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        </div>
    </div>
</section>

<nav class="navbar navbar-toggleable-md bg-faded sticky-top bg-primary navbar-inverse hidden-md-up" style="background-color:#79E66F !important;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/gph/grupo-azteca.png" width="auto" height="50" class="d-inline-block align-top" alt="">
    </a>
    <?php 
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
    ?>
</nav>