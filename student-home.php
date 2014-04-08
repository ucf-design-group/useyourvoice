<?php 
/* Template Name: Student Home */
get_header(); ?>
<?php include 'nav.php'; ?>

			<div class="content-area">
				<div class="main"> 
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content', 'page' );
					} ?>
				</div>
				<!-- <aside> -->
					<!-- OPTIONAL -->
				<!-- </aside> -->
			</div>

<?php get_footer(); ?>