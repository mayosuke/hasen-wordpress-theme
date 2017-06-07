<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">
		
		<?php if ( is_sticky() && !is_single() ) : ?>
		
			<p><span class="fa fw fa-star"></span><?php _e('Sticky','hitchcock'); ?></p>
		
		<?php endif; ?>
		
		<div class="latest-posts-list-item">
		
		    <?php if ( get_post_type($post) == 'post' ) : ?>
		      <p class="latest-posts-list-item-date"><?php the_time(get_option('date_format')); ?></p>
		    <?php endif; ?>
							
		    <?php if ( get_the_title() != '' ) : ?>
		    	<h2 class="latest-posts-list-item-title"><?php the_title(); ?></h2>
		      <p class="latest-posts-list-item-excerpt"><?php echo get_the_excerpt(); ?></p>
		    <?php endif; ?>
	    
		</div>

</a> <!-- /post -->
