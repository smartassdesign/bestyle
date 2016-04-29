<?php get_header(); the_post(); ?>

	<div class="container p-y-lg">
					<article id="post-<?php the_ID(); ?>" class="main-entry" itemscope itemtype="http://schema.org/blogPosting">

						<div class="row">
						<div class="col-md-9 col-md-offset-3 m-t-3">

						<div class="lead-img m-b-1">
						<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-full img-fluid' ) ); ?>
						</div>



						<h2 class="m-b-2"><?php the_title(); ?></h2>


							<?php the_content();
							?>

						<div class="footer">
							<div class="row">
								<div class="col-md-6">
									<span class="upo small">Updated </span> <span class="entry-date"><?php the_date(); ?></span></span></p>
								</div> <!-- ./col-md-6 -->

								<div class="col-md-6 text-right">
								</div> <!-- ./col-md-6 -->
							</div> <!-- /.row -->
						</div> <!-- /.footer -->

						</div> <!-- /.col-md-8 -->

						</div> <!-- /.row -->
					</article> <!-- /.main-entry -->

	</div>	<!-- /.container -->


<?php get_footer(); ?>
