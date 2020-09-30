<html>
    <head>
        <title><?php wp_title('｜', true, 'right'); ?></title>
        <meta name="robots" content="index, follow">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta name="format-detection" content="telephone=no">
        <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" />
        <meta name="thumbnail" content="<?php echo get_template_directory_uri(); ?>/metathum.jpg" />
        <?php wp_head(); ?>
