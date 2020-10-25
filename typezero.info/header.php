<!doctype html>
<html>
    <head>
        <title><?php wp_title('｜', true, 'right'); ?></title>
        <meta name="robots" content="index, follow">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <meta name="thumbnail" content="<?php echo get_template_directory_uri(); ?>/metathum.jpg" />
        <?php wp_head(); ?>
    </head>
