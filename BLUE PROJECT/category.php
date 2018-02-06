<?php 
	get_header();
	?>
	</div>
		<div id="content">
		<div class="portfolio-wrapper">
	<?php

	if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
			?>
					
						
						<div class="portfolio-row">
					<div class="portfolio-images"> 
						<?php the_post_thumbnail('thumbnail')?>

					
						<?php $imgs = $dynamic_featured_image->get_featured_images([get_the_ID()]);

						
						for ($i = 0; $i< count($imgs); $i++) {
								echo "<img src='".$imgs[$i]['thumb']."' />";
							}	


						?>

						
					</div> 
					<div class="portfolio-text">
					<h3><a href="<?php the_permalink() ?>"></a></h3>
						<?php the_content()?>
						<p class="portfolio-links">
							<a class="block-link more-link" href="#"><span>Find out more</span></a>
&nbsp;&nbsp;
							<a class="block-link visit-link" href="#"><span>Visit website</span></a>
						</p>
						<p class="portfolio-services">
							<?php 
							$tags = get_tags();
							$html = '<div class="post_tags">';
							foreach ( $tags as $tag ) {
							    $tag_link = get_tag_link( $tag->term_id );
							             
							    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
							    $html .= "{$tag->name}</a>";
							}
							$html .= '</div>';
							echo $html;
							?>
						</p>
					</div>
					<div class="clear"></div>
				</div>	
		
					

		<?php	endwhile;
		endif;

		?>
			</div>
			

		<?php get_footer(); ?>
	
	
	
		