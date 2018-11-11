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