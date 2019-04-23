<?php get_header(); ?>
<?php if ( have_posts() ) : 
			// Start the loop.
	while ( have_posts() ) : 
		the_post(); ?>

		<!-- acum scriu HTML normal -->

		<h1> <?php the_title(); ?> </h1> <!-- //echo get_the_title();-->
		<?php echo '<h1>' . the_content() . '</h1>'; ?>

		<hr/>	<!-- //horizontal line -->

	<?php // End the loop.
	endwhile;

			// If no content, include the "No posts found" template.
else :
	echo 'Nu avem POSTuri';
endif;
?>


<?php get_footer(); ?>

<!--comentariile php nu se vad la F12 -->
<!--comentariile html se vad la F12   -->
