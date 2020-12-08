<?php

function osmTheme_support(){
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support('menus');
    register_nav_menu("header","En tête du page");
    register_nav_menu('footer','Pied de page');
    add_image_size('monFormat',350,215,true);
}

add_action('after_theme_setup',osmTheme_support());

function osmTheme_assets(){
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js’,[‘popper’,’jquery’], false, true);');
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_script', osmTheme_assets());


 function osm_add_aos_animation() {
     wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
     wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
     wp_enqueue_script('theme-js', get_template_directory_uri() . '/theme.js', array( 'AOS' ), null, true);
 }

 add_action( 'wp_enqueue_scripts', osm_add_aos_animation() );

function osmTheme_menu_class($class){
    $class[] = 'nav-item';
    return $class;
}

add_filter('nav_menu_css_class','osmTheme_menu_class');

function osmTheme_menu_css_link($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_filter('nav_menu_link_attributes','osmTheme_menu_css_link');


// add métadonnée
function osmTheme_metabox(){
    add_meta_box("osmtheme_price","Prix","osmTheme_conts_metabox","post","side");
}

function osmTheme_conts_metabox(){
    ?>
     <label for="osmTheme_in_metabox">Saisir le prix</label>
     <input type="text" id="osmTheme_in_metabox" name="osmTheme_meta_champ">
    <?php
}

add_action("add_meta_boxes","osmTheme_metabox");

// save métadonnées
function osmTheme_save_meta_box($post_id){
    if (isset($_POST['osmTheme_meta_champ']) && current_user_can('edit_post',$post_id)){
       if ($_POST['osmTheme_meta_champ']===""){
           delete_post_meta($post_id,'osmtheme_price');
       }
       else{
           update_post_meta($post_id,'osmtheme_price',esc_html($_POST["osmTheme_meta_champ"]));
       }
    }
}
add_action('save_post','osmTheme_save_meta_box');


// custom fields MetaBox online generator

add_filter( 'rwmb_meta_boxes', 'osm70_register_meta_boxes' );

function osm70_register_meta_boxes( $meta_boxes ) {
    $prefix = 'prefix-';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Spécifications', 'online-generator' ),
        'id'         => 'untitled',
        'post_types' => ['post'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type' => 'text',
                'id'   => $prefix . 'text_18b18ymumigi',
                'name' => esc_html__( 'Longueur', 'online-generator' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_18b18ymumigi_d0dnotgdhnp',
                'name' => esc_html__( 'Largeur', 'online-generator' ),
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'text_18b18ymumigi_d0dnotgdhnp_qzwqvrsrd6',
                'name' => esc_html__( 'Profondeur', 'online-generator' ),
            ],
            [
                'type'   => 'radio',
                'id'     => $prefix . 'radio_7stp978nbaj',
                'name'   => esc_html__( 'Grand', 'online-generator' ),
                'options' => [
                    'Grand' => esc_html__( 'Grand', 'online-generator' ),
                    'Petit' => esc_html__( 'Petit', 'online-generator' ),
                ],
                'inline' => true,
            ],
            [
                'type' => 'map',
                'id'   => $prefix . 'map_u3dih2seboi',
                'name' => esc_html__( 'Map', 'online-generator' ),
            ]
        ],
    ];

    return $meta_boxes;
}