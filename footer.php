<footer class="footer ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Cleaning Company</h2>
						<p><?php the_field('description','option') ?></p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
              <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Latest News</h2>

            <?php 
            $blog = new WP_Query(array(
              'post_type'=>'post',
              'posts_per_page'=>2
            ));
             

            while($blog->have_posts()){
             $blog->the_post(); 
             ?>
            

						<div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></a>
              <div class="text">
                <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span><?php the_time("F, j, y") ?></a></div>
                  <div><a href="#"><span class="icon-person"></span> <?php the_author() ?></a></div>
                </div>
              </div>
            </div>
            <?php } ?>
              </div>
            </div>
					</div>
					<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
						<h2 class="footer-heading">Quick Links</h2>

            <?php
              wp_nav_menu(array(
                'theme_location'=>'headerMenuLocation',
                'menu_class'=>'list-unstyled'
              ));
             ?>

						<<!-- ul class="list-unstyled">
              <li><a href="#" class="py-1 d-block">Home</a></li>
              <li><a href="#" class="py-1 d-block">About</a></li>
              <li><a href="#" class="py-1 d-block">Services</a></li>
              <li><a href="#" class="py-1 d-block">Works</a></li>
              <li><a href="#" class="py-1 d-block">Blog</a></li>
              <li><a href="#" class="py-1 d-block">Contact</a></li>
            </ul> -->
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Have a Questions?</h2>
						<div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map-marker"></span><span class="text"><?php the_field('address','option') ?></span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text"><?php the_field('contact','option'); ?></span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text"><?php the_field('email','option') ?></span></a></li>
              </ul>
            </div>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php wp_footer(); ?>
    
  </body>
</html>

