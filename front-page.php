<?php get_header(); ?>

 <div class="hero-wrap js-fullheight" style="background-image: url('<?php the_field('page_banner'); ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading"><?php the_field('title') ?></h2>
          	<h1 class="mb-4"><?php the_field('main_heading_') ?></h1>
            <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4"><?php the_field('button_text') ?> <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>

	  

   <?php echo do_shortcode("[about]"); ?>

    <?php echo do_shortcode("[services]") ?>

    <?php echo do_shortcode("[team]"); ?>

		
    <section class="ftco-section ftco-no-pb">
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
		

		<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News &amp; Blog</span>
            <h2>Latest News</h2>
          </div>
        </div>
        <div class="row d-flex">

          <?php 
          $news = new WP_Query(array(
            'post_type'=>'post'
            'posts_per_page'=>3
          ))
           
          while($news->have_posts()){
            $news->the_post();    
           ?>
          

          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
              </a>
              <div class="text mt-3 px-4">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/person_2.jpg);"></div>
              		<div class="desc pl-3">
              			<span>Posted by <?php the_author(); ?></span>
              			<span><?php the_time("F, J, y"); ?></span>
              		</div>
              	</div>
                <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                <p><?php the_excrept(); ?></p>
              </div>
            </div>
          </div>

        <?php } ?>
          
        </div>
      </div>
    </section>

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

   <?php echo do_shortcode("[pricing]"); ?>

<?php echo do_shortcode("[testimonial]"); ?>


<?php get_footer(); ?>