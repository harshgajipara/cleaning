<?php
/*
Template Name: About
*/
get_header();
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url('/') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread"><?php the_title() ?></h1>
          </div>
        </div>
      </div>
    </section>

  <?php echo do_shortcode("[about]"); ?>


   <?php echo do_shortcode("[team]"); ?>

    <?php echo do_shortcode("[testimonial]"); ?>

    <section class="ftco-section ftco-intro" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 text-center">
    				<h2>Together we will explore new things</h2>
    				<a href="" class="icon-video d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></a>
    			</div>
    		</div>
    	</div>
    </section>

<?php get_footer(); ?>