<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="header-inner">
                <?php
                if(is_home() || is_front_page()) {
                  $title_tag_start = '<h1 class="site-title">';
                  $title_tag_end = '</h1>';
                } else {
                  $title_tag_start = '<p class="site-title">';
                  $title_tag_end =  '</p>';
                }
                ?>

                <!--タイトルを画像にする場合-->
                <div class="site-title-wrap">
                  <?php echo $title_tag_start; ?>
                    <a href="<?php echo home_url(); ?>">
                      <img src="<?php echo get_template_directory_uri() ?>/images/title.png">
                    </a>
                  <?php echo $title_tag_end; ?>
                </div>

                <!--タイトルを文字にする場合-->
                <div class="site-title-wrap">
                  <?php echo $title_tag_start; ?>
                    <a href="<?php echo home_url(); ?>">
                      <?php bloginfo( 'name' ); ?>
                    </a>
                  <?php echo $title_tag_end; ?>
                </div>
                <!--ヘッダーメニュー-->
                <div id="header-nav-wrap" class="header-nav-wrap">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header-nav',
                        'container' => 'nav',
                        'container_class' => 'header-nav',
                        'container_id' => 'header-nav',
                        'fallback_cb' => ''
                    ) ); ?>
                </div>
            </div>
        </header>
