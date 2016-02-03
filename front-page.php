<?php get_header(); the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="mission m-y-3 text-md-center">
				<h1>Downtown Brooklyn is a College Town and a Center for Innovation.</h1>
				<h2>The Brooklyn Education Innovation Network (BE.IN) serves as a local talent pipeline connecting students to industry and community through internships, jobs, events, and programming.</h2>
			</div> <!-- /.mission -->
		</div> <!-- /.col-md-12 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->


<?php //get all the posts however your query does it. simple example when there aren't a lot:
$args = array("nopaging" => true);
$posts = (new WP_Query($args))->posts;

//filter the posts array by looking up the thumb_url and seeing if it's empty
$posts_without_thumbnails = array_filter($posts,  function($post){
  $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
  return ( wp_get_attachment_thumb_url( $post_thumbnail_id ) == "");
} ); ?>

	<div class="m-b-3">
	<?php echo do_shortcode('[new_royalslider id="1"]')  ?>
		<?php /*echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-fluid img-featured' ) ); */ ?>
	</div>

<div class="container">

	<article id="<?php echo $post->post_name;?>">

		<?php the_content(); ?>

	</article>


	<div class="row text-xs-center m-y-3 quicklinks">
		
		<a href="<?php echo home_url(); ?>/students-alumni">
			<div class="col-md-4">
				<img src="http://placehold.it/300x150" class="img-fluid">
				<h5>Students + Alumni</h5>	
			</div> <!-- /.col-md-4 -->
		</a>

		<a href="<?php echo home_url(); ?>/faculty-staff">
			<div class="col-md-4">
				<img src="http://placehold.it/300x150" class="img-fluid">
				<h5>Faculty + Staff</h5>	
			</div> <!-- /.col-md-4 -->
		</a>

		<a href="<?php echo home_url(); ?>/companies">
			<div class="col-md-4">
				<img src="http://placehold.it/300x150" class="img-fluid">
				<h5>Companies</h5>	
			</div> <!-- /.col-md-4 -->
		</a>		

	</div> <!-- /.row -->


	<div class="row text-xs-center m-y-3">
		
		<a href="<?php echo home_url(); ?>/jobs" class="job-box">
			<div class="col-md-6">
				<h3>Find a Job/Internship</h3>	
			</div> <!-- /.col-md-6 -->
		</a>

		<a href="<?php echo home_url(); ?>/jobs/post-a-job" class="job-box">
			<div class="col-md-6">
				<h3>Post a Job/Internship</h3>		
			</div> <!-- /.col-md-6 -->
		</a>

	</div> <!-- /.row -->	


</div>	<!-- /.container -->

<?php get_footer(); ?>
