<?php 






//here add jquery

	function Fname()
	{
		wp_enqueue_script('jquery');
	}
//...==========......jQuery link k HUK a deya hoyece..=========.........
add_action('wp_enqueue_scripts' ,'Fname');




add_theme_support('title-tag');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','gallery','video'));











function custom_post(){
    /*This for slider Custom photo*/

    register_post_type( 'slider-photo',
        array(
            'labels' => array(
                'name' => __( 'Add Photos' ),
                'singular_name' => __( 'Add Photo' ),
                'add_new_item' => __( 'Add New Photo' )
            ),
            'public' => true,
            'supports' => array('thumbnail'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'slider-photo-item'),
        )
    );
    /*This for slider Custom photo*/

        /*This for about-me*/

    register_post_type( 'about-me',
        array(
            'labels' => array(
                'name' => __( 'Add About Me Texts' ),
                'singular_name' => __( 'Add Text' ),
                'add_new_item' => __( 'Add New Text' )
            ),
            'public' => true,
            'supports' => array('editor','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'about-me-item'),
        )
    );
    /*This for about-me*/


        /*This for skills-bar  */

    register_post_type( 'skills-bar',
        array(
            'labels' => array(
                'name' => __( 'Add Skills' ),
                'singular_name' => __( 'Add Skill' ),
                'add_new_item' => __( 'Add New Skill' )
            ),
            'public' => true,
            'supports' => array('editor','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'skills-bar-item'),
        )
    );
    /*This for skills-bar   */ 

        /*This for resume  */

    register_post_type( 'resume',
        array(
            'labels' => array(
                'name' => __( 'Add Resumes' ),
                'singular_name' => __( 'Add Resume' ),
                'add_new_item' => __( 'Add New Resume' )
            ),
            'public' => true,
            'supports' => array('title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'resume-item'),
        )
    );
    /*This for resume   */


        /*This for services  */

    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Add Services' ),
                'singular_name' => __( 'Add Service' ),
                'add_new_item' => __( 'Add New Service' )
            ),
            'public' => true,
            'supports' => array('title','editor', 'custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'services-item'),
        )
    );
    /*This for services   */



        /*This for recent-work  */

    register_post_type( 'recent-work',
        array(
            'labels' => array(
                'name' => __( 'Add Recent Works' ),
                'singular_name' => __( 'Add Recent Work' ),
                'add_new_item' => __( 'Add New Recent Work' )
            ),
            'public' => true,
            'supports' => array('thumbnail','title','editor'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'recent-work-item'),
        )
    );
    /*This for completed-work   */

        /*This for completed-work  */

    register_post_type( 'completed-work',
        array(
            'labels' => array(
                'name' => __( 'Add Completed Works' ),
                'singular_name' => __( 'Add Completed Work' ),
                'add_new_item' => __( 'Add New Completed Work' )
            ),
            'public' => true,
            'supports' => array('thumbnail','title','editor','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'completed-work-item'),
        )
    );
    /*This for completed-work   */ 

          	/*This for review  */

    register_post_type( 'review',
        array(
            'labels' => array(
                'name' => __( 'Add Reviews' ),
                'singular_name' => __( 'Add Review' ),
                'add_new_item' => __( 'Add New Review' )
            ),
            'public' => true,
            'supports' => array('thumbnail','title','editor','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'review-item'),
        )
    );
    /*This for review   */


}

add_action('init','custom_post');


add_theme_support( 'post-thumbnails', array(    'slider-photo',
                                                'about-me',
                                                'skills-bar',
                                                'resume',
                                                'services',
                                                'recent-work',
                                                'completed-work',
                                                'review',
                                               


                                                ) );



add_image_size( 'slider-photo-thumb, 200, 220');
add_image_size( 'recent-work-item-thumb, 340, 260');
add_image_size( 'completed-work-item-thumb, 340, 180');
add_image_size( 'review-item-thumb, 110, 105');





//add_image_size( 'post-thumb', 380, 380 );




function theme_prefix_setup() {
    
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true,
    ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
function theme_prefix_the_custom_logo() {
    
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }

}



// Start Add Logo


    add_theme_support( 'custom-logo', array(
        'height'      => 44,
        'width'       => 244,
        'flex-height' => true,
    ) );

// End Add Logo


