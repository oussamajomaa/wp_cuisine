
<?php get_header(); ?>

    <h1>
        Bienvenue à la Cuisine Levantine !
    </h1>

    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post() ?>
                <div class="col-sm-4" data-aos="zoom-in-down">
                    <div class="card mb-5" >
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('monFormat',["class"=>"w-100 rounded", "style"=>"height:auto"]) ?></a>  
                        <div class="card-body">
                        <a href="<?php the_permalink() ?>"><h4 class="card-title"><?php the_title() ?></h4></a>
                            <h5 class="card-title"><?php the_category() ?></h5>
                            <p class="card-text"><?php the_content() ?></p>

                            <h5 class="card-title">
                                <?php  $viandes=get_the_terms(get_the_ID(),'viande');
                                   var_dump($viandes[1]);
                                ?>
                            </h5>
                            
                            <!-- pour afficher le métadonné -->
                            <p>La longueur: <?= rwmb_meta('prefix-text_18b18ymumigi');?></p>
                            
                            
                            <p>La largueur: <?= rwmb_meta('prefix-text_18b18ymumigi_d0dnotgdhnp');?></p>
                            <p>Map: <?= rwmb_meta('prefix-map_u3dih2seboi');?></p>
                            <?php if (get_post_meta(get_the_ID(),'osmtheme_price',true)) : ?>
                                <p class="card-text">le prix: <?= get_post_meta(get_the_ID(),'osmtheme_price',true) ?></p>
                                <!-- <p class="card-text">le qte: <?= get_post_meta(get_the_ID(),'osmtheme_price',true) ?></p> -->
                            <?php else :?>
                                <p class="text-danger">le prix n'est rensigné encore </p>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
        <?= paginate_links() ?>
    <?php endif ?>


<?php get_footer(); ?>