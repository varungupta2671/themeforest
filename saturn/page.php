<?php get_header();?>
	<section class="main-content">
		<?php 
		/**
		 * saturn_cover_media action.
		 * hooked saturn_cover_media, 10
		 */
		do_action( 'saturn_cover_media' );	
		?>
		<div class="container">
			<?php
			/**
			 * want to display the banner/ads, hook into this.
			 */ 
			do_action( 'saturn_before_content' );
			?>		
			<div class="content">
				<div class="row">
					<div class="col-md-<?php if( is_active_sidebar( apply_filters( 'saturn_custom_sidebar' , 'sidebar-primary') ) ):?>9<?php else:?>12<?php endif;?> col-main-content">
						<div class="primary-content" id="primary-content">
							<?php if( have_posts() ) : the_post();?>
							<?php 
							/**
							 * saturn_breadcrumbs action.
							 * hooked saturn_get_breadcrumbs, 10
							 */
							do_action( 'saturn_breadcrumbs' );
							?>
							<?php get_template_part( 'content', 'page' );?>
							<?php 
		                    	if( comments_open() ){
		                    		comments_template();
		                    	}
		                    ?>
							<?php endif;?>
						</div>
					</div>
					<?php get_sidebar();?>
				</div>				
			</div><!-- end content -->
			<?php
			do_action( 'saturn_after_content' );
			?>			
		</div><!-- end container -->
	</section>
<?php get_footer();?>
