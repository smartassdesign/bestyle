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

		<script src="//use.typekit.net/ygx1hux.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<!-- $TODO Replace w/ local files for production -->
		<link rel="stylesheet" href="https://i.icomoon.io/public/a2e1a8bb34/BEIN/style.css">

	<?php wp_head(); ?>				
	</head>
	
	
	<body <?php body_class( 'viewport flexbox' ); ?>> 

<header>

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


<div class="container-fluid bgko">
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

<!--       <ul class="nav navbar-nav pull-xs-right">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul> -->
    </nav>











<!-- 
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="logo"><a class="navbar-brand" href="<?php echo home_url(); ?>">Real Estate <br>Market Report</a></div>
    </div> -->

<?php /*
		wp_nav_menu( array(
			'menu'              => 'primary',
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse navbar-default',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav navbar-right',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
            );
*/   ?>

<!--     </div>
</nav> -->

</div> <!-- /.col-xs-12 -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</div> <!-- /.container-fluid -->

</header>

<main class="site-content" role="main"> 