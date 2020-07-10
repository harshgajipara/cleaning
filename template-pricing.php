<?php
/*
Template Name: Pricing
*/
get_header();
?>

 <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Pricing <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Pricing</h1>
          </div>
        </div>
      </div>
    </section>
		
		<?php echo do_shortcode("[pricing]"); ?>

<?php get_footer(); ?>