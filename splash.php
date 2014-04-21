<?php 
/* Template Name: Splash Page */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title>UCF Use Your Voice</title>
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	</head>
	<body <?php echo $body_class; ?>>
		<div class="page">
				<div class="main">
					<div class="uyvLogo"></div>
					<div class="splashNav">
						<ul>
							<li><a href="http://sdesosiwebdev1.sdes.ucf.edu/test-area/home-2/ucf-student-guide/">UCF Student Guide</a></li>
							<li><a href="http://sdesosiwebdev1.sdes.ucf.edu/test-area/home-2/non-university-guide/">Non-University Guide</a></li>
						</ul>
					</div>
					<div class="splashMain">
						<p>The very aim of our institutions is just this: that we may think what we like and say what we think.</p>
						<p> &#150; Oliver Wendell Holmes</p>
					</div>
				</div>
				<!-- <aside> -->
					<!-- OPTIONAL -->
				<!-- </aside> -->
			<!-- FOOTER S -->
		</div> <!-- e/o .page -->
		<footer class = "splashFooter">
			<!-- IMAGES HERE -->
			<p class="logos">
				<a class="osi" href="http://osi.ucf.edu/">OSI</a>
				<a class="ucf" href="http://ucf.edu/">UCF</a>
				<a class="sga" href="http://sga.ucf.edu/">SGA</a>
				<a class="dg" href="http://osi.ucf.edu/design-group/">Design Group</a>
			</p>
			<!-- Set the backgrounds of each anchor with logo image sprite so it's one HTTP request, use Sass -->
			<p>
				© <?php echo date('Y'); ?> University of Central Florida Office of Student Involvement<br />
				Student Union, Room 208, 12715 Pegasus Drive, Orlando, FL 32816-3245<br />
				email: <a href="mailto:osi@ucf.edu">osi@ucf.edu</a> | phone: <a href="tel:4078236471">407.823.6471</a> | fax: <a href="tel:4078235899">407.823.5899</a><br />
			</p>
		</footer>
		
		<?php wp_footer(); ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
		<script type="text/javascript" src="//use.typekit.net/cfr5gdp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</body>
</html>
<!-- FOOTER E -->
