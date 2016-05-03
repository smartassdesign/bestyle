<?php
/*
  Template Name: Full Width Page
*/
?>

<?php get_header(); the_post(); ?>


<?php if( tribe_is_past() || tribe_is_upcoming() && !is_tax() ) { ?>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<a href="/symposium"><img class="img-fluid" src="/wp-content/themes/bestyle/assets/img/BEINnovative-Symposium-banner.png"></a>
			</div> <!-- /.col-md-10 -->	
		</div> <!-- /.row -->	
	</div> <!-- /.container -->	

	<hr class="m-y-2">	
<?php } ?>

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
