<?php
// set up theme
// markup with html5
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// generate feed link
add_theme_support('automatic-feed-links');
// use eye-catch image
add_theme_support('post-thumbnails');

// カスタムメニュー
register_nav_menu('header_nav', 'ヘッダーナビゲーション');
register_nav_menu('footer_nav', 'フッターナビゲーション');

?>
