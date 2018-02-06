<?php get_header();?>
	<div class="container-fluid" id="postBG">
		
	
	<div class="container" >
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class("col-md-12"); ?> id="post-<?php the_ID(); ?>" >
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>

	
	

<?php endwhile; ?>
	</div>
</div>
	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Not Found</h1>
	</div>

<?php endif; ?>
					
<?php get_footer(); ?>