<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>



	<article id="<?php echo $post->post_name;?>">
	<div class="row m-b-3">
		<a href="<?php echo the_permalink(); ?>">
			<div class="col-md-4">
			<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-full img-fluid' ) ); ?>					
			</div> <!-- /.col-md-4 -->
			</a>				
		
		<div class="col-md-8">
		<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
		</a>
		<?php the_excerpt(); ?>
		</div> <!-- /.col-md-8 -->
		</div> <!-- /.row -->
	</article>