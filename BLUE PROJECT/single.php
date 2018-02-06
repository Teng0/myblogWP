<?php 
	get_header();
	?>
	</div>
	<div id="content">
		<div id="page">
	<?php

	if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
			?>
						
						<h2>  <?php the_title()?></h2>
						
						<?php the_content()?>

		<?php	endwhile;
		endif;

		?>
			</div>
			<div id="sidebar">
				<?php 
						dynamic_sidebar("sidebar-2");
				?>
			</div>

		<?php get_footer(); ?>