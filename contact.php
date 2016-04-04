<?php
/*

Template Name: Contact

*/
get_header();



?>

<header class="intro-contact">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Contact us</h1>

                        <p class="intro-text">Feel free to contact us, whether it's just to say hi or a song you'd like featured!</p><a class="btn btn-circle page-scroll fa fa-angle-double-down animated" href="#latest" style="font-size:54px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- About Section -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="container content-section text-center" id="latest">
        <div class="row">
            <div class="col-md-12">
            <form class="form-horizontal">
                    <fieldset>
                <?php the_content(); ?>
                     </fieldset>
                </form>
            </div>
        </div>
    </section><!-- Footer -->

    <?php endwhile; endif; get_footer(); ?>   