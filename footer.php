</main> <!-- /.site-content -->




 <footer class="m-t-3 p-y-2">
	<div class="container">
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

			<div class="col-sm-6 text-xs-right footer-social"> <!-- align-kid -->
			  <div class="cutbox">
             <p><a href="https://www.facebook.com/naturalgourmetinstitute" target="_blank"><i class="icon-facebook"></i></a> <a href="https://twitter.com/naturalgourmet" target="_blank"><i class="icon-twitter"></i></a> <a href="http://instagram.com/naturalgourmetinstitute" target="_blank"><i class="icon-instagram"></i></a><a href="http://www.pinterest.com/naturalgourmet/" target="_blank"><span class="icon-pinterest"></span></a><a href="http://www.linkedin.com/company/natural-gourmet-institute" target="_blank"><span class="icon-linkedin"></span></a></p>
             <p><a href="#mailingModal" data-toggle="modal" data-target="#mailingModal">Sign up for our Mailing List</a></p>
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
