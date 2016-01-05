<?php
/*
  Template Name: Full Width Page
*/
?>

<?php get_header(); the_post(); ?>

<?php //get all the posts however your query does it. simple example when there aren't a lot:
$args = array("nopaging" => true);
$posts = (new WP_Query($args))->posts;

//filter the posts array by looking up the thumb_url and seeing if it's empty
$posts_without_thumbnails = array_filter($posts,  function($post){
  $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
  return ( wp_get_attachment_thumb_url( $post_thumbnail_id ) == "");
} ); ?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="m-b-3">
		<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-fluid img-featured' ) ); ?>
	</div>
  <?php endif; ?>

<div class="container">

	<div class="row">

	<article id="<?php echo $post->post_name;?>">

		<div class="col-md-10 col-md-offset-1">
			<?php the_content(); ?>
		</div> <!-- /.col-md-10 col-md-offset-1 -->
	</article>
	
	</div> <!-- /.row -->

</div>	<!-- /.container -->

<?php get_footer(); ?>
