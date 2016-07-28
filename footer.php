</main> <!-- /.site-content -->




 <footer class="m-t-3">

	<div class="prefooter text-xs-center">
		<span class="h4">Follow us</span>
		<a href="https://twitter.com/BEIN_BK" target="_blank"><span class="icon-twitter"></span></a>
		<a href="https://www.facebook.com/BEINBROOKLYN" target="_blank"><span class="icon-facebook"></span></a>
		<a href="http://instagram.com/beinbrooklyn/" target="_blank"><span class="icon-instagram"></span></a>
		<a href="https://www.linkedin.com/company/brooklyn-education-innovation-network-be.in-?trk=company_logo" target="_blank"><span class="icon-linkedin"></span></a>
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
jQuery(document).ready(function($){
	$('.collapse.in').prev('.panel-heading').addClass('active');
	$('#accordion')
	.on('show.bs.collapse', function(a) {
	  $(a.target).prev('.panel-heading').addClass('active');
	})
	.on('hide.bs.collapse', function(a) {
	  $(a.target).prev('.panel-heading').removeClass('active');
	});
});
</script>


<script type="text/javascript">
jQuery(document).ready(function($){
    if(location.hash != null && location.hash != ""){
        $('.collapse').removeClass('in');
        $(location.hash + '.collapse').collapse('show');
    }
});
</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2730561-10', 'auto');
  ga('send', 'pageview');

</script>

	
<?php wp_footer(); ?>

	</body>
</html>
