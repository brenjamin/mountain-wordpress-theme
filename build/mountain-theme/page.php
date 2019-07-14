<?php
    while (have_posts()) {
        the_post();
    }
    get_header();
?>
<div class="page__main">
    <img class="page__img" src="<?php echo get_field('page_image')[url]; ?>" alt="">
    <h1 class="page__h1 u-margin-bottom-lg">
        <span class="page__h1--small"><?php echo get_field('page_small_heading'); ?></span><br>
        <?php echo get_field('page_heading'); ?>
    </h1>
    <p class="page__text">
        <?php echo get_field('page_main_copy'); ?>
    </p>
</div>

<?php the_content(); ?>
<?php  get_footer(); ?>