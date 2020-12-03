<?php get_header(); ?>
<div class="container">
    <div class="single-main">
        <?php if(have_posts()): ?>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
