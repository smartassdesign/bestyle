<?php get_header(); the_post(); ?>

<?php /* get_template_part('layouts/jumbotron-image'); */ ?>

<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-full img-featured' ) ); ?>


<!-- <div id="sectioned" class="bcb p-y-lg">		 -->
	<div class="container p-y-lg">
		<!-- <div class="row p-y-md"> -->
<!-- 			<div class="col-lg-12"> -->
					<article id="post-<?php the_ID(); ?>" class="main-entry" itemscope itemtype="http://schema.org/blogPosting">

						<div class="row">
						<div class="col-md-9 col-md-offset-3">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php if($sub = get_field('sub_title'))
						echo '<h5>' .$sub. '</h5>'; ?>

							<?php the_content();
							?>

						<div class="footer">
							<div class="row">
								<div class="col-md-6">
									<span class="upo small">Updated </span> <span class="entry-date"><?php the_date(); ?></span></span></p>
								</div> <!-- ./col-md-6 -->

								<div class="col-md-6 text-right">
									<span class="upo small">Share <a rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this post on Facebook"><span class="icon-facebook"></span></a>
									<a rel="nofollow" href="http://twitter.com/home?status=<?php echo urlencode("Currently reading: "); ?><?php the_permalink(); ?>" title="Share this article with your Twitter followers"><span class="icon-twitter"></span></a></span>

								</div> <!-- ./col-md-6 -->
							</div> <!-- /.row -->
						</div> <!-- /.footer -->

						</div> <!-- /.col-md-8 -->

						</div> <!-- /.row -->
					</article> <!-- /.main-entry -->
				<!-- </div> --> <!-- /.col-lg-12 -->

<?php /*			<div class="col-lg-3 col-md-12 bcb">
					<?php get_sidebar( 'sidebar-1' );  ?>
			</div> <!-- /.col-lg-3 --> */ ?>
		<!-- </div> --> <!-- /.row -->
	</div>	<!-- /.container -->

			<!-- <div class="post-post-content bgr m-a"> -->
				<!-- <div class="row"> -->

	<div class="container">
		<div class="row m-y-md">

		</div>
	</div>
			<!-- </div> -->


<!-- </div> --> <!-- /#sectioned cb -->

				<?php }; ?>


<?php get_footer(); ?>
