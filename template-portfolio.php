<?php
/*
Template Name: Portfolio
*/
get_header();
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Portfolio <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Portfolio</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-12 heading-section  text-center ftco-animate">
          	<span class="subheading">Our Project</span>
            <h2>We have done many latest cleaning project</h2>
          </div>
        </div>
				<div class="row">
         
          <?php
         
        if( have_rows('cleaning_project') ):

            while ( have_rows('cleaning_project') ) : the_row();
                                  
            ?>

              <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="work img d-flex align-items-center" style="background-image: url(<?php the_sub_field('project_image'); ?>);">
                  <a href="<?php the_sub_field('project_image'); ?>" class="icon image-popup d-flex justify-content-center align-items-center">
                    <span class="fa fa-expand"></span>
                  </a>
                  <div class="desc w-100 px-4 text-center pt-5 mt-5">
                    <div class="text w-100 mb-3 mt-4">
                      <h2><a href="work-single.html"><?php the_sub_field('project_name'); ?></a></h2>
                    </div>
                  </div>
                </div>
              </div>
              <?php

              endwhile;
            else :
            endif;
            ?>
            </div>
      </div>
    </section>   


        </div>
       
			</div>
		</section>	

<?php get_footer(); ?>