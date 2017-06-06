<?php
/*
Template Name: Top Page
*/
?>
<?php get_header(); ?>

<?php
$category_names = array( 'services', 'contents' );
foreach ( $category_names as $cat_name ) {
?>
<div class="content section-inner">
  <h2 class="content-category"><?php echo get_cat_name(get_category_by_slug( $cat_name )->term_id); ?></h2>

	<?php
  $args = array( 'post_type' => 'page', 'orderby' => 'menu_order', 'category_name' => $cat_name );
  $query = new WP_query($args);
  if ($query->have_posts()) :
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$total_post_count = wp_count_posts();
		$published_post_count = $total_post_count->publish;
		$total_pages = ceil( $published_post_count / $posts_per_page );
		if ( "1" < $paged ) : ?>
		
			<div class="page-title">
				<h4><?php printf( __('Page %s of %s', 'hitchcock'), $paged, $wp_query->max_num_pages ); ?></h4>
			</div> <!-- /page-title -->
			<div class="clear"></div>
		
		<?php endif; ?>
	
  <?php if (strcmp($cat_name, 'contents') == 0) : ?>
		<div class="posts posts-news" id="posts">
  <?php else : ?>
		<div class="posts" id="posts">
  <?php endif; ?>
	
      <?php
      while ($query->have_posts()) : $query->the_post();
        get_template_part( 'content', get_post_format() );
      endwhile;
      wp_reset_postdata(); ?>

	    <div class="clear"></div>
		</div> <!-- /posts -->
		
	<?php endif; ?>
	
	<div class="clear"></div>
</div> <!-- /content -->
<?php } ?>

<?php get_footer(); ?>

