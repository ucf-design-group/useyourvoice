<?php 
/* Template Name: Non-University Home */
get_header(); ?>
<?php include 'nonuniversity-nav.php'; ?>

			<div class="content-area">
				<div class="main"> 
					<div class="textArea">
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content', 'page' );
					} ?>
					</div>
					<div class="imageArea">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
				</div>
				<!-- <aside> -->
					<!-- OPTIONAL -->
				<!-- </aside> -->
			</div>

<?php get_footer(); ?>