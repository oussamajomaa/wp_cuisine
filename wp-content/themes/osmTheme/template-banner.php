<?php

/*
* Template Name: page avec bannière
* Template Post Type: page, post
*/

?>

<?php get_header(); ?>
<div class="jumbotron">

    <?php if (have_posts()) : ?>
        <!-- <?php while (have_posts()) : the_post() ?> -->
        <h1 class="text-center"><?php the_title() ?></h1>
        <div class="text-center">
            <img src="<?php the_post_thumbnail_url() ?>" style="width:100%;height:auto" alt="">
        </div>
        <h5><?php the_category() ?></h5>
        <p><?php the_content() ?></p>
    
        <!-- <?php endwhile ?> -->
    
    <?php endif ?>
</div>
<?php get_footer(); ?>