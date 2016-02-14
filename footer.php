</main> <!-- /.site-content -->




 <footer class="m-t-3">

	<div class="prefooter text-xs-center">
		<span class="h4">Follow us</span>
		<a href="https://twitter.com/BEIN_BK" target="_blank"><span class="icon-twitter"></span></a>
		<a href="https://www.facebook.com/BEINBROOKLYN" target="_blank"><span class="icon-facebook"></span></a>
		<a href="http://instagram.com/beinbrooklyn/" target="_blank"><span class="icon-instagram"></span></a>
		<a href="https://www.linkedin.com/" target="_blank"><span class="icon-linkedin"></span></a>
		<a href="http://vimeo.com/beinbrooklyn" target="_blank"><span class="icon-vimeo"></span></a>	
	</div> <!-- /.prefooter -->

	<div class="container p-y-2">
			<div class="row">
				 <div class="col-sm-4 col-sm-offset-4 footer-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bein-logo-k-250-2x.png" class="img-fluid center-block" alt="Brooklyn Education Innovation Network ">
				 </div> <!-- /.col-sm-4 -->
			</div> <!-- /.row -->

		<div class="row">
			<!-- <div class="div-aligner"> -->
			<div class="col-sm-6 footer-contact"> <!-- align-kid -->
						<p>1 Metrotech Center North, Suite 1003 <br>Brooklyn, New York 11201</p> 
						<!-- <a href="mailto:esummers@downtownbrooklyn.com">esummers@downtownbrooklyn.com</a> -->
			</div><!-- /.col-md-4 -->

			<div class="col-sm-6 text-sm-right footer-social"> <!-- align-kid -->
				<div class="cutbox">
						<!--  <p>
						<a href="https://twitter.com/" target="_blank"><span class="icon-twitter"></span></a>
						<a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a>
						<a href="http://instagram.com/" target="_blank"><span class="icon-instagram"></span></a>
						<a href="https://www.linkedin.com/" target="_blank"><span class="icon-linkedin"></span></a>
						<a href="http://vimeo.com/" target="_blank"><span class="icon-vimeo"></span></a></p> -->
						 <p><a class="mailink" href="#mailingModal" data-toggle="modal" data-target="#mailingModal">Sign up for our Mailing List</a></p>
				</div>
				</div><!-- /.col-md-4 -->
			</div> <!-- ./div-aligner -->
		</div><!-- /.row -->
	</div> <!-- ./container -->
</footer>


<?php get_template_part('quick/modal-mailing');  ?>

<?php /*get_template_part('quick/modal-info');  ?>

<?php include("quick/modal-ngihca.php"); */ ?>




<script>
		//Google Analytics
		var _gaq=[['_setAccount','UA-2730561-9'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

	
<?php wp_footer(); ?>

	</body>
</html>
