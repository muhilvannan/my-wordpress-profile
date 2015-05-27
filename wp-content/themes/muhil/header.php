<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title><?php is_home() || is_front_page() ? bloginfo('description') : wp_title(''); ?> — <?php bloginfo('name');?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr-2.0.6.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
    <!-- CSS -->
	<link href="<?php bloginfo( 'template_url' ); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo( 'template_url' ); ?>/assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo( 'template_url' ); ?>/assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo( 'template_url' ); ?>/assets/css/animate.css" rel="stylesheet">
    
	<!-- Custom styles CSS -->
	<link href="<?php bloginfo( 'template_url' ); ?>/assets/css/style.css" rel="stylesheet" media="screen">
    
    <script src="<?php bloginfo( 'template_url' ); ?>/assets/js/modernizr.custom.js"></script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-63320649-1', 'auto');
      ga('send', 'pageview');

    </script>
<?php
    wp_head();
    wp_get_archives('type=monthly&format=link');
?>

</head>
<body>
 
	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>
    
    <!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
                <a href="https://github.com/muhilvannan" target="_blank" style="float: left;margin-top: 15px;padding-right:5px;"><i class="fa fa-github" style="font-size: 22px;"></i></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Muhil</a>
                    
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="/blog">Blog</a></li>
						<!-- <li><a href="/#home">Home</a></li> -->
						<li><a href="/#services">Services</a></li>
                        <!-- <li><a href="/#portfolio">Works</a></li> -->
                        <li><a href="/#skills">Skills</a></li>
						<li><a href="/#testimonials">Testimonials</a></li>
						<li><a href="/#contact">Contact</a></li>
                        <li><a href="/about-me">About me</a></li>                        
                    </ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->
   
       
    
   		
        
    
    