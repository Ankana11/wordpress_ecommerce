<footer class="footer">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<img src="<?php echo get_template_directory_uri()?>/assets/images/demos/demo-3/logo-footer.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            	
	            		
	            		
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>
        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
            </li>
          
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                <nav class="mobile-nav">
                    <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'Primary', 
                        'menu_class' => 'mobile-menu', 
                        'container' => false, 
                        'depth' => 3, 
                    ));
                    ?>
                </nav><!-- End .mobile-nav -->
            </div><!-- End .tab-pane -->
           
        </div><!-- End .tab-content -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

    <!-- Plugins JS File -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/superfish.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap-input-spinner.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.plugin.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/main.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/demos/demo-4.js"></script>
</body>


<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>