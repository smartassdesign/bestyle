<?php get_header(); the_post(); ?>

<?php //get all the posts however your query does it. simple example when there aren't a lot:
$args = array("nopaging" => true);
$posts = (new WP_Query($args))->posts;

//filter the posts array by looking up the thumb_url and seeing if it's empty
$posts_without_thumbnails = array_filter($posts,  function($post){
  $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
  return ( wp_get_attachment_thumb_url( $post_thumbnail_id ) == "");
} ); ?>

	<div class="m-b-3">
		<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-fluid img-featured' ) ); ?>
	</div>

<div class="container">

	<div class="row">
		<div class="col-md-3">
<?php /*
$subPage = is_subpage();
$ancestor = $post->ancestors[1];
if ($subPage) : // we're on a sub-page:
if ($ancestor) : // we're a sub-sub nav item...
echo "<ul class=\"page-list list-unstyled\">";
wp_list_pages("title_li=&child_of=$ancestor&sort_column=menu_order");
echo "</ul>";
else :
echo "<ul class=\"page-list list-unstyled\">";
wp_list_pages("title_li=&child_of=$subPage&sort_column=menu_order");
echo "</ul>";
endif;
endif; */

/* echo '<ul class="list-unstyled">';

  $base_args = array(
    'hierarchical' => 0
  );

  if (has_children()) {
    $args = array(
      'child_of' => $post->ID,
      'parent' => $post->ID
    );
  } else {
    if (is_top_level()) {
      $args = array(
        'child_of' => $post->post_parent,
        'parent' => $post->post_parent
      );
    } else {
      $args = array(
        'parent' => 0
      );
    }
  }
  
  $args = array_merge($base_args, $args);
  
  $pages = get_pages($args);
  
  foreach ($pages as $page) {

    echo '<li><a href="' . get_permalink($page->ID) . '">' . $page->post_title . '</a></li>';

  }

echo '</ul>';
*/ ?>

<ul class="clearfix list-unstyled inner-nav">
    <?php wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
</ul>
		</div> <!-- /.col-md-3 -->


	<article id="<?php echo $post->post_name;?>">

		<div class="col-md-9">
			<?php the_content(); ?>
		</div> <!-- /.col-md-9 -->
	</article>
	
	</div> <!-- /.row -->

</div>	<!-- /.container -->

<?php get_footer(); ?>
