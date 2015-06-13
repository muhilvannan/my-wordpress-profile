 <?php
    wp_footer();
?>
	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<ul class="social-links">
						<li><a href="https://www.facebook.com/muhil.vannan" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/blueash1198" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://github.com/muhilvannan" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-github"></i></a></li>	
                        <li><a href="/instagram-gallery" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-instagram"></i></a></li>
						<li><a href="mailto:muhil@outlook.com" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
					</ul>

					<p class="heart">
                        Made with <span class="fa fa-heart fa-2x animated pulse"></span> in Edinburgh
                    </p>
                    <p class="copyright">
                        © <?php echo date("Y"); ?> Muhil Vannan | Images: <a href="https://unsplash.com/">Unsplash</a> & <a href="http://zoomwalls.com/">Zoomwalls</a>
					</p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
        <?php if (is_front_page()) { ?>
            <a href="#home"><i class="fa fa-angle-up"></i></a>
        <?php } else { ?>
            <a href="#postContainer"><i class="fa fa-angle-up"></i></a>
        <?php } ?>
 	</div>
    
    <!-- Scroll to top end-->

	<!-- Javascript files -->

	<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/imagesloaded.pkgd.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/jquery.sticky.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/smoothscroll.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/wow.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/assets/js/jquery.easypiechart.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/assets/js/jquery.cbpQTRotator.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/custom.js"></script>
</body>
</html>