		<div class="navigation">
			
			<div class="section-inner">
				
				<ul class="main-menu">
																		
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary', 
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
					<?php /*
					<li class="header-search">
						<form method="get" class="search-form" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="search" class="search-field" name="s" placeholder="<?php _e('Search Form','hitchcock'); ?>" /> 
							<a class="search-button" onclick="document.getElementById('search-form').submit(); return false;"><div class="fa fw fa-search"></div></a>
						</form>
					</li>
					*/?>
				</ul>
				
				<div class="clear"></div>
				
			</div> <!-- /section-inner -->
			
		</div> <!-- /navigation -->
	


<div class="credits section-inner">
			
	<p>&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></p>
	<div class="clear"></div>
	
</div> <!-- /credits -->

<?php wp_footer(); ?>

</body>
</html>
