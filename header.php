<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="description" content="<?php bloginfo('description');?>">

		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged, $gpp;

			wp_title( '|', true, 'right' );

			// Add the blog name.
			bloginfo( 'name' );

			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";

			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'chromatic' ), max( $paged, $page ) );

			?>

		</title>

		<script src="https://use.typekit.net/nvn6ujv.js"></script>
		<script>try{Typekit.load({ async: false });}catch(e){}</script>


	<?php wp_head(); ?>				
	</head>
	
	
	<body <?php body_class( 'viewport flexbox' ); ?>> 

<header>

<div class="container-fluid bgk hidden-sm-down">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-static-top">
					<?php 
							wp_nav_menu( array(
								'menu'              => 'secondary',
								'theme_location'    => 'secondary',
								'depth'             => 1,
								'container'         => 'div',
								'container_class'   => 'navbar-default pull-xs-right',
								'container_id'      => 'pre-navbar',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
					            );
					?>
				</nav>
			</div> <!-- /.col-xs-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.container-fluid -->


<div class="container-fluid bgko hidden-sm-down">
<div class="container">
<div class="row">
<div class="col-xs-12">
    <nav class="navbar navbar-static-top">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Brooklyn Education Innovation Network</a>
<?php 
		wp_nav_menu( array(
			'menu'              => 'primary',
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'navbar-default pull-xs-right',
			'container_id'      => 'navbar',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
            );
   ?>


</div> <!-- /.col-xs-12 -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</div> <!-- /.container-fluid -->



		<div class="hidden-md-up">
	  <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">		

			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Brooklyn Education Innovation Network</a>
		<ul id="menu-mobile-holder" class="list-inline pull-xs-right">
			<li><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">☰</button></li>
		</ul>
		

<div class="container">
<div class="row">
<div class="col-xs-12">
	<div class="navbar-collapse collapse inverse hidden-md-up" id="navbar-mobile">

				<?php
					if(has_nav_menu('mobile')) {
						$args = array(
							'theme_location'   => 'mobile',
							'depth'      => 1,
							'container'  => false,
							'menu_class'     => 'list-unstyled',
						);
						wp_nav_menu($args);
					}
				?>
</div> <!-- /.col-md-12 -->				
</div> <!-- /.row -->
</div> <!-- /.container -->



			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	  </div> <!-- /.container -->
	</div> <!-- /.navbar-collapse collapse inverse -->


</div> <!-- /.pull-xs-right -->

</header>

<main class="site-content" role="main"> 
