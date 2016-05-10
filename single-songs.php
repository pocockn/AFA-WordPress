<?php

get_header(); 

$song_name = get_post_meta( get_the_ID(), '_song_name' );
$media_link = get_post_meta( get_the_ID(), '_video_link' );
 
?>
    <?php
        // Start the loop.
    while ( have_posts() ) : the_post();

    ?>

    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?php the_title(); ?></h1>

                        <p class="intro-text"><?php echo $song_name[0]; ?></p><a class=
                        "btn btn-circle page-scroll fa fa-angle-double-down animated"
                        href="#latest" style="font-size:54px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- About Section -->

    <section class="container content-section text-center" id="latest">
        <div class="row">
            <div class="col-md-12">
                <iframe width="100%" height="700" src="<?php echo $media_link[0]; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section><!-- Footer -->

<?php endwhile; ?>

<?php get_footer(); ?>    