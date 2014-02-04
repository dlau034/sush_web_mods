<?php
/*
Template Name: Apps Single Template
*/
get_header();
?>


	

	<!-- SINGLE BANNER -->
	<!-- <div class="nav_buffer"></div>	 -->

<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>





	<div class="single_banner_bg">
		<?php if (class_exists('MultiPostThumbnails')) :  MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image', NULL,  'post-secondary-image-thumbnail hidden-xs single_banner img-responsive'); endif; ?>
	</div>		

	<!-- APPS_DETAILS UNIT -->
		<!-- APPS SINGLE DETAIL UNIT-->
	<!-- ####################### -->	

	<div class="apps_detail_bg">		
		<div class="container">
			<div class="row">
				<div class="col-sm-8 apps_title_wrapper">
					<?php the_post_thumbnail('full', array('class' => 'apps_detail_icon img-thumbnail img-rounded')); ?>
					
					<h1 class="cap"><?php the_title(); ?></h1>
					<?php if ( get_post_meta($post->ID, 'AppCompany', true) ) : ?>
						<h2 class="cap"><?php echo get_post_meta($post->ID, 'AppCompany', true) ?></h2>
					<?php endif; ?>								
				
					<div class="apps_description">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="app_detail_specs">

						<?php if ( get_post_meta($post->ID, 'AppSpecOne', true) ) : ?>
							<h4><?php echo get_post_meta($post->ID, 'AppSpecOne', true) ?></h4>
						<?php endif; ?>

						<?php if ( get_post_meta($post->ID, 'AppSpecTwo', true) ) : ?>
							<h3><?php echo get_post_meta($post->ID, 'AppSpecTwo', true) ?></h3>
						<?php endif; ?>
						
						<?php if ( get_post_meta($post->ID, 'IOS Link', true) ) : ?>
							<a href="<?php echo get_post_meta($post->ID, 'IOS Link', true) ?>">
								<img class="app_link ios_link" src="<?php bloginfo( 'template_url' ); ?>/img/appstore.png">
							</a>
						<?php endif; ?>
						
						<?php if ( get_post_meta($post->ID, 'Android Link', true) ) : ?>
							<a href="<?php echo get_post_meta($post->ID, 'Android Link', true) ?>">
								<img class="app_link android_link" src="<?php bloginfo( 'template_url' ); ?>/img/googleplay.png">
							</a>
						<?php endif; ?>		
						<?php if ( get_post_meta($post->ID, 'Windows Link', true) ) : ?>
							<a href="<?php echo get_post_meta($post->ID, 'Windows Link', true) ?>">
								<img class="app_link windows_link" src="<?php bloginfo( 'template_url' ); ?>/img/window.png">
							</a>
						<?php endif; ?>	
						<?php if ( get_post_meta($post->ID, 'Berry Link', true) ) : ?>
							<a href="<?php echo get_post_meta($post->ID, 'Berry Link', true) ?>">
								<img class="app_link berry_link" src="<?php bloginfo( 'template_url' ); ?>/img/blackberry.png">
							</a>
						<?php endif; ?>
						<?php if ( get_post_meta($post->ID, 'Mac Link', true) ) : ?>
							<a href="<?php echo get_post_meta($post->ID, 'Mac Link', true) ?>">
								<img class="app_link mac_link" src="<?php bloginfo( 'template_url' ); ?>/img/macappstore.png">
							</a>
						<?php endif; ?>				
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
	<!-- APPS_GALLERY UNIT -->
	<div class="app_gallery_bg">	
		<div class="container">	
			<!-- <div id="links"> -->
			<div class="gallery_box">

				<?php  $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post->ID
  );

  $attachments = get_posts( $args );
  $pik = 0;

     if ( $attachments ) {

     	$attlen = sizeof($attachments);
     	
        foreach ( $attachments as $attachment ) {

        	if($pik < ($attlen-1)){

           		$pp =  wp_get_attachment_image_src($attachment->ID, 'full');
           ?>
			<a class="app_screenshots img-responsive" href="<?php echo $pp[0]; ?>" data-gallery>
			        <img src="<?php echo $pp[0]; ?>">
			</a>
           <?php
           		
           		$pik++;
        	}

         }

     }

     ?>

			    
			    	    		    		    		    		    
			</div>	
		</div>	
	</div>

	<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
	<div id="blueimp-gallery" class="blueimp-gallery apps_screen_wrapper">
	    <!-- The container for the modal slides -->
	    <div class="slides"></div>
	    <!-- Controls for the borderless lightbox -->
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	    <!-- The modal dialog, which will be used to wrap the lightbox content -->
	    <div class="modal fade apps_screen_item">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <!-- <div class="modal-header"> -->
	                    
	                    <!-- <h4 class="modal-title"></h4> -->
	                <!-- </div> -->
	                <div class="modal-body ">
	                	
	                    
	                </div>
	                <div class="modal-footer">
	                	<a href="" class="close" aria-hidden="true">&times;</a>
	                		<div class="direction">
								<a href="" class="pull-left prev">
			                        <i class="glyphicon glyphicon-chevron-left btn-lg"></i>
			                    </a>
			                    <a href="" class="next">	                 
			                        <i class="glyphicon glyphicon-chevron-right btn-lg"></i>
			                    </a>	                	
	                    	</div>	                	
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
</div>


		

	<!-- APPS_FEATURED LIST UNIT -->
		<!-- APPS_FEATURED LIST UNIT -->
	
	<div class="apps_featuredlist_bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>APP FEATURES</h2>		
					<?php the_content(); ?>
				</div>
			</div>			
		</div>		
	</div> 			


	<?php if ( get_post_meta($post->ID, 'Lower App Section', true) ) : ?>
		<?php echo get_post_meta($post->ID, 'Lower App Section', true) ?>							
	<?php endif; ?>

	
<?php endwhile; endif; ?>
			

	<?php get_footer(); ?>