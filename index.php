<?php 
session_start();

// Include the cookie functions file
require_once('inc_files/cookies.php');

// Set caching headers for static resources (e.g., CSS, JavaScript, images)
// Cache for 1 month (2592000 seconds)
header("Cache-Control: public, max-age=2592000");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Isawumi Abel Dayo - Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
 
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">


</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



	<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-resume">Who am I?</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-services">Skills</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-vision">Vision</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-projects">Projects</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>




	<section class="site-hero" style="background-image: url(images/image_1.jpg);" id="section-home" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row intro-text align-items-center justify-content-center">
				<div class="col-md-10 text-center pt-5">
					<h1 class="site-heading site-animate">Hello, I'm 
				<p> <strong>Isawumi,</strong> Abel Dayo</p></h1>
				<h2>Feel free to call me <strong>Ekúndayò</strong> if you can</h2>
				<p>A dynamic Web Developer, IT Manager, and Creative Visionary. Let's build something extraordinary together. </p>
				</div>
			</div>
		</div>
	</section> <!-- section -->
	
	<section class="site-section " id="section-resume">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Who <strong>am I?:</strong></h2>
						<p>The Tech Enthusiast You Can Count On!</p>
					</div>
				</div>
				<div class="col-lg-6 pr-lg-5 mb-5 mb-lg-0">
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/nqoTmbpTocs?si=yytJ7REZDlnFTc3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
				<img src="images/image_1.jpg"  alt="Image placeholder" class="img-fluid" loading="lazy">	
				</div>
				<div class="col-lg-6 pl-lg-6">

					<p class="mb-5">I am a versatile professional skilled in web development, IT management, and visual arts. My expertise spans HTML, CSS, and PHP, with a passion for AI, cybersecurity, Digital Forensics, and prompt engineering.</p>
  					
  					<p class="mb-5">With years of experience driving results and creating impact, I bring innovation and strategy to every project.</p>

					<p class="mb-5" >Currently serving as an IT Manager, I lead technology initiatives and oversee systems that support core business operations, ensuring seamless functionality across teams. My role allows me to blend technical expertise with leadership, fostering an environment where technology drives organizational success.</p>

					<p class="mb-5" >As I evolve in my career, I’m passionate about expanding my knowledge in emerging fields such as cybersecurity, Digital Forensics, AI technologies, and prompt engineering. These areas are vital to the future of technology, and I am committed to staying ahead of the curve through continuous learning and application.</p>

					<p class="mb-5" >My vision is to leverage my experience in tech management and Web development to contribute to innovative projects while deepening my expertise in cybersecurity and AI technology practices. I am always open to exploring new opportunities and collaborations that align with these passions.</p>
					
				</div>
			</div>
			</div>
	</section> <!-- .section -->


	<section class="site-section pb-0"  id="section-services">
		<div class="container">

			<div class="row mb-4">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h2>Think You Know <strong>Tech?</strong> Let's Talk Real <strong>Skills!</strong></h2>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-md-6 col-lg-3 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-browser2"></span>
						</span>
						<h3 class="mb-4">Front End Development</h3>
						<p>HTML, CSS, JavaScript</p>
					<!-- <a href="#" class="site-link">View Projects<i class="icon-chevron-right"></i></a> -->
					</div>
				</div>
					<div class="col-md-6 col-lg-3 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-pencil3"></span>
						</span>
						<h3 class="mb-4">Back End Development</h3>
						<p>PHP, MySQL</p>
					<!-- <p><a href="#" class="site-link">View Projects <i class="icon-chevron-right"></i></a> -->
					</div>
				</div>
				<div class="col-md-6 col-lg-3 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-pencil3"></span>
						</span>
						<h3 class="mb-4">Artificial Intelligence</h3>
						<p>Prompt engineering, cybersecurity</p>
					<!-- <a href="photography" class="site-link">See More <i class="icon-chevron-right"></i></a> -->
					</div>
				</div>
				<div class="col-md-6 col-lg-3 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-video2"></span>
						</span>
						<h3 class="mb-4">Creative Design</h3>
						<p>Photography, video editing, graphic design</p>
					<!-- <a href="#" class="site-link">See More <i class="icon-chevron-right"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="site-section" id="section-vision">
		<div class="container">
			<div class="row intro-text align-items-center justify-content-center">
				<div class="col-md-12">
				<div class="section-heading text-center">
				<h2>Dream Big or Stay Home: My <strong>Vision</strong> for Tomorrow</h2>
				<p>My goal is to lead in tech innovation, create sustainable solutions, and inspire others through thought leadership. Building impactful businesses and fostering meaningful change is my community. </p>
				</div>
			</div>
		</div>
		</div>
	</section>


		<section class="site-section pb-0"  id="section-projects">
		<div class="container">

			<div class="row mb-4">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h2>Doubt My Skills? Check These Out!</h2>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-browser2"></span>
						</span>
						<h3 class="mb-6">Portfolio Website</h3>
						<p>This website is a showcase of my expertise in web development and creative design.</p>
					<a href="#" class="site-link">View Projects<i class="icon-chevron-right"></i></a>
					</div>
				</div>
					<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-pencil3"></span>
						</span>
						<h3 class="mb-6">AI Prompt Library</h3>
						<p>A collection of optimized prompts for generating AI-driven visuals and text.</p>
					<p><a href="#" class="site-link">View Projects <i class="icon-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-video2"></span>
						</span>
						<h3 class="mb-4">Creative Design</h3>
						<p>Photography, video editing, graphic design</p>
					<a href="#" class="site-link">See More <i class="icon-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="site-section" id="section-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Still Not Convinced? Let's Connect!</h2>
						<p>Have a project in mind or want to collaborate? Reach out, and let's make it happen.</p>
					</div>
				</div>


				<div class="col-md-6 pl-md-5">
					<h3 class="mb-5">My Contact Details</h3>
					<ul class="site-contact-details">
						<li>
							<span class="text-uppercase">Email</span>
							<a href="mailto:dayoisawumi@gmail.com">dayoisawumi@gmail.com </a>
						</li>
						<li>
							<span class="text-uppercase">Phone</span>
							<a href="tel:+23408136424457">+234 813 642 4457 </a>
						</li>
						<li>
							<span class="text-uppercase">WhatsApp</span>
							<a href="">+234 813 642 4457</a>
						</li>
						<li>
							<span class="text-uppercase">Philosophy</span>
							<h5>Shaping Tomorrow's <strong>Tech</strong> Landscape, One <strong>Project</strong> at a Time.</h5>
						</li>
					</ul>
				</div>

				<div class="col-md-6 mb-5 mb-md-0">
					<form action="process.php" class="site-form" method="POST" enctype="application/x-www-form-urlencoded">
						<h3 class="mb-5">Get In Touch</h3>
						<div class="form-group">
							<input name="name" id="name" type="text" class="form-control px-3 py-4" placeholder="Your Name" required="">
						</div>
						<div class="form-group">
							<input name="email" id="email" type="email" class="form-control px-3 py-4" placeholder="Your Email" required="">
						</div>
						<div class="form-group">
							<input name="phone" id="phone" type="phone" class="form-control px-3 py-4" placeholder="Your Phone" required="">
						</div>
						<div class="form-group mb-5">
							<textarea name="message" id="message"class="form-control px-3 py-4"cols="30" rows="5" placeholder="Write a Message" required=""></textarea>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary  px-4 py-3">Send Message</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</section>


	<footer class="site-footer">
		<div class="container">

			<div class="row mb-5">
				<p class="col-12 text-center">
					Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved</a>
				</p>
			</div>
			
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<p>
						<a href="https://web.facebook.com/abeldhayo/" class="social-item"><span class="icon-facebook2"></span></a>
						<a href="https://twitter.com/dayo_isawumi?t=AFeSbmHrLFQIUdLa362J7Q&s=09" class="social-item"><span class="icon-twitter"></span></a>
						<a href="https://www.instagram.com/dayo_isawumi/" class="social-item"><span class="icon-instagram2"></span></a>
						<a href="https://www.linkedin.com/in/abel-isawumi-045927158/" class="social-item"><span class="icon-linkedin2"></span></a>
						<a href="https://www.behance.net/abeldayoisawumi" class="social-item"><span class="icon-behance"></span></a>
						<a href="https://linktr.ee/dayoisawumi" class="social-item"><span class="icon-globe"></span></a>
					</p>
				</div>
			</div>
			
		</div>
	</footer>




	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>

	<script src="js/vendor/jquery.easing.1.3.js"></script>

	<script src="js/vendor/jquery.stellar.min.js"></script>
	<script src="js/vendor/jquery.waypoints.min.js"></script>

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="js/custom.js"></script>

    </body>
    </html>