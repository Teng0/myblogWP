	<?php get_header()?>

		<div id="slides-container">
			<div id="slides">

			<?php $query = new WP_Query( array( 'post_type' => 'slider' ) );
		if ($query-> have_posts() ) :
			while ($query-> have_posts() ) : $query->the_post(); 
			?>
			<div>
					<div class="slide-image"> <?php the_post_thumbnail()?></div>
				
					<div class="slide-text">
						<h2><?php the_title()?></h2>
						<?php the_content()?>
					</div>
				</div>
		<?php	endwhile;
		endif;
		 ?>
				</div>
				
				

			<div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>
			
			<div id="myController" class="hidden"><span class="jFlowControl"></span><span class="jFlowControl"></span><span class="jFlowControl"></span></div>
		</div>
	


		
		<div class="clear"></div>
	</div>
	
	
	<div id="content">
		<!-- left hand main content -->
		<div id="page">
			
			<?php 

			if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
			?>		
						
						<h2> <a href="<?php the_permalink();?>"> <?php the_title()?></a></h2>
						<?php the_content("სრულად . . .")?>

		<?php	endwhile;
		endif;
		 ?>






			
		

		</div>
		<!-- end left hand main content -->
		
		<!-- start sidebar -->		
		<div id="sidebar">
		 <?php echo dynamic_sidebar("sidebar-1" )?>
			

		</div>
		<!-- end sidebar -->
<?php get_footer(); ?>	
