<?php
/*
	Template Name: Home Page
*/

global $more;    // Declare global $more (before the loop).


?>
<?php get_header(); ?>

<!-- Home start -->

	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<div class="start">Hello, my name is Muhil and I am</div>
			<h1>Systems Administrator and Cloud Enthusiast</h1>
			<div class="start">building Cloud Architectures and speccing systems for business transformation </div>
		</div>

        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	<!-- Home end -->


    <!-- Services start -->

	<section id="services" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">This is what I do</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							A fan of everything AWS and Google, a Git master and a Trekkie.
						</div>
					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-magic-wand"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Systems Analysis and Design</h3>
							<div class="iconbox-desc">
								Analyse and create enterprise architecture to enable business transformation
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-badge"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Git Master</h3>
							<div class="iconbox-desc">
								Managing and Maintaining git repositories
							</div>
						</div>
					</div>

				</div>
                
                <div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-badge"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">RHCE</h3>
							<div class="iconbox-desc">
								A RedHat Certified Engineer proficient in Maintaining and Administering Redhat based distributions, AWS and Database Administration
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-question"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">DevOps</h3>
							<div class="iconbox-desc">
								Bash Scripts, New Relic, Chef, Vagrant and PHP to do both Development work and Operations
							</div>
						</div>
					</div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Services end -->

    <!-- Portfolio start -->

	<!-- <section id="portfolio" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">My works</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Some of the clients I have worked with to architect and develop web based and cloud based systems
						</div>
					</div>

				</div>

			</div><!-- .row -->
            
            
            <div class="row">
                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/item-1.jpg" alt="img01"/>
                            <!--<img src="https://www.agencyexpress.co.uk/wp-content/themes/agency-express/images/logo.png" alt="img01"/> -->
                            <figcaption>
                                <!-- <h2>Agency Express</h2> -->
                                <p>Administering Cloud Servers and also Built an HTML5 Mobile App</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/item-2.jpg" alt="img01"/>
                            <!-- <img src="https://accentdesign.co.uk/wp-content/themes/accent/img/logo.png" alt="img01"/> -->
                            <figcaption>
                                <!-- <h2>Accent Design</h2> -->
                                <p>Git Master and Systems Administrator</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                             <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/item-3.jpg" alt="img01"/>
                            <!-- <img src="http://cdn.property118.com/wp-content/themes/118v2/img/p118_logo_new.png" alt="img01"/> -->
                            <figcaption>
                                <!-- <h2>Property118</h2> -->
                                <p>Improved website performance by architecting Cloud based architecture</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <!-- <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/item-4.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Bang <span>Bang</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/item-5.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Crypton <span>Dude</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/item-6.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Don't <span>Poke</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div> -->
                
            </div>


		</div><!-- .contaier -->

	</section> -->

	<!-- Portfolio end -->
    
    <!-- Skills start -->
    
    <section class="pfblock pfblock-gray" id="skills">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">My Skills</h2>
                                <div class="pfblock-line"></div>
                            </div>

                        </div>

                    </div><!-- .row -->
                    <div class="col-sm-6 col-md-3 text-center">
						<span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
						<h3 class="text-center">Systems Adminstration</h3>
					</div>
					
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">Programming</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
						<h3 class="text-center">Cloud Architecture Design</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="85" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">85</span>
                        </span>
						<h3 class="text-center">Systems Design</h3>
					</div>
					
					
				</div><!--End row -->
			
			</div>
		
    </section>
    
    <!-- Skills end -->

    <!-- Testimonials start -->

	<section id="testimonials" class="pfblock pfblock-gray">

		<div class="container">
            
            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">What people say</h2>
						<div class="pfblock-line"></div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/client-1.jpg" alt="client-1" />
                    <blockquote>
                      <p>I learn something new nearly every time I speak to Muhil, his enthusiasm for Linux and open source is infectious. He seems to take new challenges in a really calm way, "oh you want me to learn a new language, ok I'll just do that". Then he starts reading about it and just gets on with it.</p>
                      <footer>Adam Wilson, Web Developer at Spotted Paint</footer>
                    </blockquote>
                </div>               

            </div>		

            </div><!-- .row -->

					
		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->


	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Drop me a line</h2>
						<div class="pfblock-line"></div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<form id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Name</label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Email</label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".2s">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Message"></textarea>
							</div>

							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Send Message</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Contact end -->


<?php get_footer(); ?>