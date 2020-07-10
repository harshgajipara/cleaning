<?php get_header(); ?>

 <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url('/') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="<?php site_url('/blog') ?>">Blog <i class="fa fa-chevron-right"></i></a></span> <span><?php the_title() ?> <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<p>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3"><?php the_excerpt(); ?></h2>
            <p><?php the_content() ?></p>
            <div class="pt-5 mt-5">

              <!-- END comment-list -->

      <?php // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
       comments_template();
      endif; ?>
              
          </div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            
            <div class="sidebar-box ftco-animate">
            <h3>Recent Blog</h3>

              <?php 
              $blog = new WP_Query(array(
                'post_type'=>'post',
                'posts_per_page'=>3
              ));
              ?>

              <?php if($blog->have_posts()){
                $blog->the_post();
               ?>
              <?php the_title() ?>
              <?php the_excerpt() ?>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->

<?php get_footer(); ?>