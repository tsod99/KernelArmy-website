<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
        <title>Home - K3RN3L4RMY</title>		
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

        <script src="js/modernizr-2.6.2.min.js"></script>
		
		<?php include __DIR__ . "/includes/footer.php"; ?>

    </head>
	
    <body id="body">
	
		<div id="preloader">
			<img src="img/preloader.gif" alt="Preloader">
		</div>
		

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                   
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
				
					
					
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/logo.png" alt="Brandi">
						</h1>
					</a>
				
                </div>

				
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#features">What we do</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
				
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				
			
				<div class="carousel-inner" role="listbox">
					
				
					<div class="item active" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Welcome to<span> K3RN3L4RMY WEBSITE</span>!</h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">./CTF</span> team.</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of professionals</p>
							
							<ul class="social-links text-center">
								<li><a href="https://twitter.com/L4Rn3"><i class="fa fa-twitter fa-lg"></i></a></li>
								
								<li><a href="https://ctftime.org/team/143202"><i class="fa fa-flag fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
				
					
					
					<div class="item" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Hacking is not a <span> CRIME</span>!</h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">./start </span> now</h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals</p>
							
							<ul class="social-links text-center">
								<li><a href="https://twitter.com/L4Rn3"><i class="fa fa-twitter fa-lg"></i></a></li>
							
								<li><a href="https://ctftime.org/team/143202"><i class="fa fa-flag fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					
					
				</div>
			
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
        <!--
        Features
        ==================================== -->
		
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Features</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-github fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>CTF Writeups</h3>
								<p>As a team, we have github accounts where we post our writeups from various CTFs. Also we are active on making various projects, web development and writing usefull scripts.</p>
								<a href="./writeups" style="color: #1ea78d;">Check out our Writeups here!</a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Blogging</h3>
								<p>Check out our medium website. We are active in writing blogs which are usefull to both beginners and advanced hackers, ranging from web hacking to cryptography and game hacking.</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Consulting</h3>
								<p>As a strong team, we have community discord server where we discuss and talk about hacking, programming and anything related to IT field.</p>
							</div>
						</div>
					</div>
					
						
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		
		
       
		
        <!--
        Meet Our Team
        ==================================== -->		
		
		<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Meet Our Team</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						<p>CTF Team with sleep schedule problem.</p>
					</div>

					
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="img/team/abda.jpg" alt="Team Member" width="273" height="503"class="img-responsive">
							<figcaption class="overlay">
								<h5>Just Vibing</h5>
								<p>The question isn’t who is going to let me: it’s who is going to stop me.</p>
								<ul class="social-links text-center">
									<li><a href="https://twitter.com/Abda74851600"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://github.com/tsod99"><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Abda</h4>
						<span>MISC, REVERSE ENGINEERING</span>
					</figure>
					
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/hunter.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Emm, I do Youtube!</h5>
								<p>https://youtu.be/dQw4w9WgXcQ</p>
								<ul class="social-links text-center">
									<li><a href="https://twitter.com/H00nt3r"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>H00nter</h4>
						<span>WEB, OSINT, MISC</span>
					</figure>
					
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="img/team/play.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Hmmm...</h5>
								<p>Wanna be pwner</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Playoff-rondo</h4>
						<span>PWN</span>
					</figure>
					
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="member-thumb">
							<img src="img/team/termus.jpg" alt="Team Member" width="474" height="631" class="img-responsive">
							<figcaption class="overlay">
								<h5>I am kid</h5>
								<p>And I use Arch btw</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Termus</h4>
						<span>WEB, PWN</span>
					</figure>

					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/poly.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>I am Gemini!</h5>
								<p>"Astro boi lost in the universe of crypto"</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://github.com/polymero"><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Polymero</h4>
						<span>CRYPTO, SCRIPTING</span>
					</figure>

					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/poly.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Game Hacking!</h5>
								<p>"Waiting for qoute and pfp"</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Abraxus</h4>
						<span>REVERSE ENGINEERING</span>
					</figure>

					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/drdoctor.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Lacking Medical Expertise</h5>
								<p>"No i am not a doctor"</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Dr.Doctor</h4>
						<span>CRYPTO, SCRIPTING</span>
					</figure>


					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/evil.jpeg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>A bit here and there!</h5>
								<p>"Waiting for qoute and pfp"</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>3vilbuff3r</h4>
						<span>MISC,PWN</span>
					</figure>

					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/pika.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>A newcomer hereee!</h5>
								<p>"My balls are the heaviest!"</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-github fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>PikaPika</h4>
						<span>REVERSE ENGINEERING</span>
					</figure>
					
					
				</div>
			</div>
		</section>
		
        <!--
        End Meet Our Team
        ==================================== -->
		
		<!--
        Some fun facts
        ==================================== -->		
		
		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Some Fun Facts</h2>
							<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
						</div>
						
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-clock-o fa-3x"></i>
								<strong data-to="5">0</strong>
								<p>Months Together</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="40">0</strong>
								
								<p>CTFs done</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong data-to="83">0</strong>
								
								<p> Projects Delivered </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-trophy fa-3x"></i>
								<strong data-to="27">0</strong>
								
								<p>Awards Won</p>
							</div>
						</div>
					
				
					</div>
				</div>
			</div>
		</section>
		
        <!--
        End Some fun facts
        ==================================== -->
		
		
		<!--
        Contact Us
        ==================================== -->		
		
		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>About Us!</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<img src="img/us.png" class="img-fluid center">
					
				
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>The K3RN3L4RMY team started with only 3 members, starting in January 2021 until today. Our logo was inspired by the time we all met, which indicates on COVID-19, and a kernel as a meme. We have a CTF problem and we don’t like to sleep, but to play CTF day and night. Our goal is to go to the DEFcon finals in 2022, to compete with the best because that's where we belong. All our members are extremely young, ranging from 14 to 25 years old. Today the team has about 8 members who are very active. In a short time, we managed to enter the top 25 best hackers (according to CTFtime.com).</p>
					</div>
					
					
					
				</div>
			</div>
			
			
		</section>
		
        <!--
        End Contact Us
        ==================================== -->
		
		
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="img/footer.png" alt="">
							<p>As a team we are open for potential real-life work, so if you have any job offers you can always contact us on our discord.</p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Meet us on social accounts</h6>
							<ul>
								<li><a href="https://discord.com/invite/gzpn39FzBd">Contact Us On Discord</a></li>
								<li><a href="https://twitter.com/L4Rn3">Twitter</a></li>
								<li><a href="https://ctftime.org/team/143202">CTF Time</a></li>
								<li><a href="#">Forum (Comming soon)</a></li>
							</ul>
						</div>
					</div>
				
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2021 <a href="https://ctftime.org/team/143202">K3RN3L4RMY</a>. All rights reserved.
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
    </body>
</html>
