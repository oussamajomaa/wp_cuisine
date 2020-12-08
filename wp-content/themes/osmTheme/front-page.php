
<?php get_header(); ?>
<div class="jumbotron">

        <h1>
            Bienvenue à la Cuisine Levantine !
        </h1>
        
        <?php if (have_posts()) : ?>
        
                <?php while (have_posts()) : the_post() ?>
        
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumnail',["class"=>"w-100 rounded", "style"=>"height:auto"]) ?></a>  
        
                                <h1><?php the_title() ?></h1>
                                <!-- <h5 class="card-title"><?php the_category() ?></h5> -->
                               <a href="<?= get_post_type_archive_link('post') ?>">voir les plats</a>
        
        
                <?php endwhile ?>
        
        <?php endif ?>
</div>



<?php get_footer(); ?>