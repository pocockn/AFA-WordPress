<?php

add_theme_support( 'menus' );


if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'song-thumb', 370, 250, true ); //300 pixels wide (and unlimited height)
}

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

/***************************
* Enqueue scripts and styles
****************************/

    function bwd_theme_stylesheets()
    {
        wp_register_style('bootstrap.css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1', 'all' );
		wp_enqueue_style( 'bootstrap.css');
		wp_register_style('ihover.css', get_template_directory_uri() . '/assets/css/ihover.css', array(), '1', 'all' );
		wp_enqueue_style( 'ihover.css');
		wp_register_style('ihover.css', get_template_directory_uri() . '/assets/css/ihover.css', array(), '1', 'all' );
		wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );
    }
    
    add_action('wp_enqueue_scripts', 'bwd_theme_stylesheets');

	/**
	 * Register and load font awesome CSS files using a CDN.
	 *
	 * @link   http://www.bootstrapcdn.com/#fontawesome
	 * @author FAT Media
	 */
	function prefix_enqueue_awesome() {
		wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );
	}

	add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );

	function load_fonts() {
            wp_register_style('loraItalic', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200italic,700');
            wp_enqueue_style( 'loraItalic');
            wp_register_style('montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
            wp_enqueue_style( 'montserrat');
        }
    
    add_action('wp_print_styles', 'load_fonts');

	function bwd_load_scripts() 
	{
		wp_enqueue_script('bootstrap-js',get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'));
		wp_enqueue_script('jquery-ui',get_template_directory_uri() . '/assets/js/grayscale.js',array('jquery'));
		wp_enqueue_script('canvas-js',get_template_directory_uri() . '/assets/js/jquery.easing.min.js',array('jquery'));	
	}

	add_action( 'wp_enqueue_scripts', 'bwd_load_scripts' );

	// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

    function dem_pagination( $pages = '', $range = 2 ) {

        $showItems = ($range * 2)+1;

        global $paged;
        if (empty($paged)) $paged = 1;

        if ($pages == '') {

            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if (!$pages) {
                $pages = 1;
            }
        }

        if ( $pages != 1 ) {
            echo "div class='pagination'>";
            if ($paged > 2 && $paged > $range+1 && $showItems < $pages) {
                echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
            }
            if($paged > 1 && $showitems < $pages) {
                echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
            }
            
            for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
        } 
    }


////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

add_theme_support( 'post-thumbnails' );

include('includes/custom-post.php');
    

?>
