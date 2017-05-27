<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <meta name="google-site-verification" content="tWWKTwekfFjSuZpHNA6LgI1GSkNbOPtOEbL_HY0VeQ8" />
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
			<div class="header section-inner">
      
        <div class="mobile-menu-close-icon">
          <svg viewBox="0 0 24 24"><g stroke="black" stroke-width="3">
          <path d="M 3 3 L 21 21 M 21 3 L 3 21"></path></g></svg>
        </div><div class="mobile-menu-open-icon">
          <svg viewBox="0 0 24 24"><g stroke="black" stroke-width="3">
          <path d="M 3 3 L 21 3 M 3 12 L 21 12 M 3 21 L 21 21"></path></g></svg>
        </div>
		
			<?php if ( get_theme_mod( 'hitchcock_logo' ) ) : ?>
			
		        <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
		        	<img src='<?php echo esc_url( get_theme_mod( 'hitchcock_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
		        </a>
		
			<?php else : ?>
		
				<h1 class="blog-title">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
				</h1>
				
			<?php endif; ?>
			
			<?php if ( get_bloginfo('description') ) : ?>
			
				<p class="blog-description"><?php echo bloginfo('description'); ?></p>
			
			<?php endif; ?>
			
			<?php if ( has_nav_menu( 'social' ) ) : ?>
			
				<ul class="social-menu">
							
					<?php 
						wp_nav_menu(
							array(
								'theme_location'	=>	'social',
								'container'			=>	'',
								'container_class'	=>	'menu-social',
								'items_wrap'		=>	'%3$s',
								'menu_id'			=>	'menu-social-items',
								'menu_class'		=>	'menu-items',
								'depth'				=>	1,
								'link_before'		=>	'<span class="screen-reader-text">',
								'link_after'		=>	'</span>',
								'fallback_cb'		=>	'',
							)
						);
					?>
					
				</ul> <!-- /social-menu -->
			
			<?php endif; ?>
			
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
	


		</div> <!-- /header -->	

	
		<div class="header-image"></div>
	

