<?php

function load_features(){

wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');

wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

wp_enqueue_style('animate',get_theme_file_uri('/css/animate.css'));
wp_enqueue_style('owl.carousel',get_theme_file_uri('/css/owl.carousel.min.css'));
wp_enqueue_style('owl.theme',get_theme_file_uri('/css/owl.theme.default.min.css'));
wp_enqueue_style('magnific-popup',get_theme_file_uri('/css/magnific-popup.css'));
wp_enqueue_style('flaticon',get_theme_file_uri('/css/flaticon.css'));
wp_enqueue_style('style',get_theme_file_uri('/css/style.css'));

wp_enqueue_script('jquery',get_theme_file_uri('/js/jquery.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery-migrate-3',get_theme_file_uri('/js/jquery-migrate-3.0.1.min.js'),NULL,'1.0',true);
wp_enqueue_script('popper',get_theme_file_uri('/js/popper.min.js'),NULL,'1.0',true);
wp_enqueue_script('bootstrap',get_theme_file_uri('/js/bootstrap.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.easing',get_theme_file_uri('/js/jquery.easing.1.3.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.waypoint',get_theme_file_uri('/js/jquery.waypoints.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.staller',get_theme_file_uri('/js/jquery.stellar.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.animate',get_theme_file_uri('/js/jquery.animateNumber.min.js'),NULL,'1.0',true);
wp_enqueue_script('owl.carousel',get_theme_file_uri('/js/owl.carousel.min.js'),NULL,'1.0',true);
wp_enqueue_script('jquery.magnific-popup',get_theme_file_uri('/js/jquery.magnific-popup.min.js'),NULL,'1.0',true);
wp_enqueue_script('scrollex',get_theme_file_uri('/js/scrollax.min.js'),NULL,'1.0',true);
wp_enqueue_script('maps','https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false');
wp_enqueue_script('google-map',get_theme_file_uri('/js/google-map.js'),NULL,'1.0',true);
wp_enqueue_script('main',get_theme_file_uri('js/main.js'),NULL,'1.0',true);

}

add_action('wp_enqueue_scripts','load_features');

add_theme_support('menus');
add_theme_support('post-thumbnails');


function features(){
	register_nav_menu('headerMenuLocation','Header Menu Location');
}

add_action('after_setup_theme','features');

require_once('wp-bootstrap-navwalker.php');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function about_shortcode(){?>

 <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-items-center justify-content-center py-5 py-md-0" style="background-image:url(<?php the_field('about_image','option') ?>);">
    					<div class="time-open-wrap">
    						<div class="desc p-4">
		    					<h2>Business Hours</h2>
			              <div class="opening-hours">
			              	<h4>Opening Days:</h4>
			              	<?php $business_hours = get_field('business_hours','option'); ?>
			              	<p class="pl-3">
			              		<span><strong>Monday – Friday:</strong> <?php echo $business_hours['weekday'] ?></span>
			              		<span><strong>Saturday :</strong> <?php echo $business_hours['saturday'] ?></span>
			              	</p>
			              	<h4>Vacations:</h4>
			              	<p class="pl-3">
			              		<?php $vacations = get_field('vacations','option') ?>
			              		<span><?php echo $vacations['first'] ?></span>
			              		<span><?php echo $vacations['second'] ?></span>
			              	</p>
			              </div>
		    				</div>
								<div class="desc p-4 bg-secondary">
									<h3 class="heading">For Emergency Cases</h3>
									<span class="phone"><?php the_field('emergency','option') ?></span>
								</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 pt-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">

		          	<?php $about= get_field('about','option') ?>
		          	<span class="subheading"><?php echo $about['small_title']; ?></span>
		            <h2 class="mb-4"><?php echo $about['large_title'] ?></h2>
		            <p><?php echo $about['description'] ?></p>
		          </div>
		        </div>
						<div class="row ftco-counter py-5" id="section-counter">
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $about['yof'] ?>">0</strong>
		              </div>
		              <div class="text">
		              	<span>Years of <br>Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $about['hc'] ?>">0</strong>
		              </div>
		              <div class="text">
		              	<span>Happy <br>Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $about['bc'] ?>">0</strong>
		              </div>
		              <div class="text">
		              	<span>Building <br>Cleaned</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

<?php }

add_shortcode('about','about_shortcode');


function team_shortcode(){?>

<section class="ftco-section ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-3 pr-md-4 pb-lg-0 pb-4">
						<div class="heading-section ftco-animate text-center text-lg-left">
	          	<span class="subheading">Team &amp; Staff</span>
	          	<?php $team = get_field('team','option') ?>
	            <h2><?php echo $team['title'] ?></h2>
	            <p><?php echo $team['description'] ?></p>
	            <p><a href="#" class="btn btn-secondary"><?php echo $team['button_text'] ?></a></p>
	          </div>
					</div>


					<?php if( have_rows('staff','option') ): ?>


					<?php while( have_rows('staff','option') ): the_row(); 

						$image = get_sub_field('image','option');
						$name = get_sub_field('name','option');
						$role = get_sub_field('role','option');
					
						?>

							<div class="col-md-4 col-lg-3 ftco-animate d-flex">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(<?php echo $image; ?>);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3><?php echo $name; ?></h3>
								<span class="position mb-2"><?php echo $role; ?></span>
								<div class="faded">
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
						

					<?php endwhile; ?>

				<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


<?php }

add_shortcode('team','team_shortcode');


function testimonial_shortcode(){?>

<section class="ftco-section testimony-section ftco-bg-dark">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Testimonies</span>
            <h2>Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">

            	<?php 
            	$testimonial = new WP_Query(array(
            		'post_type'=>'testimonial',
            		'posts_per_page'=>-1
            	));
            	

            	while($testimonial->have_posts()){
            		$testimonial->the_post(); ?>
            	

              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
                  <div class="text">
                  	<div class="d-flex align-items-center mb-4">
                    	<div class="user-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                    	<div class="pl-3">
		                    <p class="name"><?php the_title(); ?></p>
		                    <span class="position"><?php the_field('role'); ?></span>
		                  </div>
	                  </div>
                    <p class="mb-1"><?php the_content(); ?></p>
                  </div>
                </div>
              </div>

          <?php }  ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php }

add_shortcode('testimonial','testimonial_shortcode');



function services_shortcode(){?>

<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2>How We Works</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-6 col-lg-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-workplace"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Office Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 services ftco-animate">
          	<div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-pool"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Pool Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-rug"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Carpet Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 services ftco-animate">
          	<div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-kitchen"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Kitchen Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-garden"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Garden Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 services ftco-animate">
          	<div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-balcony"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Window Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

<?php }

add_shortcode('services','services_shortcode');


function pricing_shortcode(){?>

 <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Price &amp; Plans</span>
            <h2>Choose Your Perfect Plans</h2>
          </div>
        </div>
    		

    	<?php if( have_rows('price','option') ): ?>
			
			<div class="row">
			
			<?php while( have_rows('price','option') ): the_row(); 

				$title = get_sub_field('title','option');
				$price = get_sub_field('price','option');
				$feature1 = get_sub_field('feature1','option');
				$feature2 = get_sub_field('feature2','option');
				$feature3 = get_sub_field('feature3','option');
				$feature4 = get_sub_field('feature4','option');
				$feature5 = get_sub_field('feature5','option');

				?>

				<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-sprayer"></span></div>
	            	<h4 class="heading-2"><?php echo $title; ?></h4>
		            <span class="price"><sup>$</sup> <span class="number"><?php echo $price; ?></span></span>
		            
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span><?php echo $feature1; ?></li>
		              <li><span class="fa fa-check mr-2"></span><?php echo $feature2; ?></li>
		              <li><span class="fa fa-check mr-2"></span><?php echo $feature3; ?></li>
		              <li><span class="fa fa-check mr-2"></span><?php echo $feature4; ?></li>
		              <li><span class="fa fa-check mr-2"></span><?php echo $feature5; ?></li>
		            </ul>

		            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>

				
			<?php endwhile; ?>
			
			</div>

		<?php endif; ?>

	      
    	</div>
    </section>

<?php }

add_shortcode('pricing','pricing_shortcode');