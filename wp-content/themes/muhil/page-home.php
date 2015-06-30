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
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/Solutions-Architect-Associate.png" />
						</div>
						<div class="iconbox-text">
							<div class="iconbox-desc">
								A Solutions Architect and requirements analyst specialising in AWS based cloud solutions
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
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/Adam.png" alt="client-1" style="max-width:320px;"/>
                    <blockquote>
                      <p>I learn something new nearly every time I speak to Muhil, his enthusiasm for Linux and open source is infectious. He seems to take new challenges in a really calm way, "oh you want me to learn a new language, ok I'll just do that". Then he starts reading about it and just gets on with it.</p>
                      <footer>Adam Wilson, Web Developer at <a href="http://spottedpaint.com/">Spotted Paint</a></footer>
                    </blockquote>
                </div> 
                
                <div class="cbp-qtcontent">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/accentdesign.png" alt="client-2" style="width:320px;"/>
                    <blockquote>
                      <p>Muhil combines the skills of technical ability with practicality. Listening to requirements and then developing an appropriate plan. He presents complex ideas in a simplified form allowing users of all abilities to understand and be part of a solution. This inclusive style of working makes Muhil an indispensable member of the team. His natural enthusiasm for server technology and deployment means he's someone to follow for the inside track and I hope we have the chance to work together again in the future.</p>
                      <footer>Dave Fuller, Director & Senior Web Designer at <a href="https://accentdesign.co.uk/">Accent Design Group Ltd</a></footer>
                    </blockquote>
                </div>
                
                

            </div>		

            </div><!-- .row -->

					
		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->


<?php get_footer(); ?>