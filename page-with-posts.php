<?php
/*
Template Name: Page with Posts
*/
?>
<?php get_header(); ?>

<div class="content section-inner">
																	                    
<?php
  $category_of_the_post;
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
  <?php $category_of_the_post = get_the_category(); ?>
	
		<div <?php post_class('post single'); ?>>
			
			<div class="post-container">
		
			<?php if ( has_post_thumbnail() ) : ?>
			
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' ); $thumb_url = $thumb['0']; ?>
		
				<div class="featured-media">
		
					<?php the_post_thumbnail('post-image'); ?>
					
				</div> <!-- /featured-media -->
					
			<?php endif; ?>
			
			<div class="post-header">
												
				<h1 class="post-title"><?php the_title(); ?></h1>
			
			</div>
			
			<div class="post-inner">
				    
			    <div class="post-content">
			    
			    	<?php the_content(); ?>
					
			    	<?php wp_link_pages('before=<div class="clear"></div><p class="page-links">' . __( 'Pages:', 'hitchcock' ) . ' &after=</p>&seperator= <span class="sep">/</span> '); ?>
			    
			    </div> <!-- /post-content -->
			    
			    <div class="clear"></div>
			    
			    <?php edit_post_link(__('Edit Page','hitchcock'), '<div class="post-meta"><p class="post-edit">', '</p></div>'); ?>
	
			</div> <!-- /post-inner -->
			
			<?php comments_template( '', true ); ?>
			
			</div> <!-- /post-container -->
		
		</div> <!-- /post -->
		
	<?php endwhile; else: ?>
	
		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "hitchcock"); ?></p>

	<?php endif; ?>

<?php //print_r( $category_of_the_post );
$cat_slugs = array();
foreach ( $category_of_the_post as $cat ) {
  $cat_slugs[] = $cat->category_nicename;
}
//print(implode(',', $cat_slugs));
$page_slug = get_page(get_the_ID())->post_name;
?>

<?php
  $args = array( 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC');
  if ($page_slug != 'blog') :
    $args['category_name'] = implode(',', $cat_slugs);
  endif;
  $query = new WP_query($args);
  if ($query->have_posts()) :
?>
	
		<?php
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
	
		<div class="posts" id="posts">
				
	    	<?php while ($query->have_posts()) : $query->the_post();
	    		get_template_part( 'content', get_post_format() );
	        endwhile;
          wp_reset_postdata(); ?>
	        
	        <div class="clear"></div>
				
		</div> <!-- /posts -->
		
	<?php endif; ?>
	
	<div class="clear"></div>
	
	<?php hitchcock_archive_navigation(); ?>
		
</div> <!-- /content -->
	              	        
<?php get_footer(); ?>
