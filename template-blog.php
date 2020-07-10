<?php
/*
Template Name: Blog
*/
get_header();
?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url('/') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </section>

    
		
		<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">

        	<?php 
        	$blog = new WP_Query(array(
        		'post_type'=>'post',
        		'posts_per_page'=>-1
        	));

		    while($blog->have_posts()){
		    	$blog->the_post();
		     ?>

          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?php echo get_the_permalink(); ?>" class="block-20 rounded" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
              </a>
              <div class="text mt-3 px-4">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/person_2.jpg);"></div>
              		<div class="desc pl-3">
              			<span>Posted by <?php the_author(); ?></span>
              			<span> <?php the_time('j F Y'); ?></span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>

         <?php } ?>

        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>