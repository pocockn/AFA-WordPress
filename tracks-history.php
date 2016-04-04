<?php

/*

Template Name: Archive

*/

get_header();

$args = array(
        'post_type' => 'songs',
        'posts_per_page' => 2,
        'orderby' => 'rand',
        'order' =>  'DESC'
);

$archive_songs_query = new WP_Query( $args );

?>
<header class="intro-archive">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Archive</h1>

                        <p class="intro-text">A archive of all the tracks posted on the site</p><a class="btn btn-circle page-scroll fa fa-angle-double-down animated"href="#latest" style="font-size:54px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- About Section -->

    <section class="container content-section text-center" id="latest">
        <div class="row ">
        <?php//f ( $archive_songs_query->have_posts() ) : while ( $archive_songs_query->have_posts() ) : $archive_songs_query->the_post();  

             // $song_name = get_post_meta( get_the_ID(), '_song_name' );

              //$thumb_id = get_post_thumbnail_id();
              //$thumb_url_array = wp_get_attachment_image_src($thumb_id, '370x250' );
              //$thumb_url = $thumb_url_array[0];

         ?> 
           <?php my_get_posts_for_pagination(); ?>
     
        </div>
    </section><!-- Footer -->

<?php get_footer(); ?>   