<?php
/**
 * @package WordPress
 * @subpackage Sush Mobile
 */
?>
<!-- FOOTER UNIT -->
	<!-- ####################### -->
			
		<!-- CONTACT UNIT -->
	<!-- ####################### -->		

	<a name="footer"></a>

	<div class="contact_bg"> 
		<div class="container">
			<div class="row">
				<div class="col-sm-6 address_wrapper">
					
					<h3><span class="icon_send glyphicon glyphicon-earphone"></span> &nbsp 0800-123-APPS</h3>
					



					<div class="location_box">
						<address class="location_text col-md-6">
						  <strong>AUCKLAND OFFICE</strong><br>
						  3A 47 High Street<br>
						  Auckland<br>
						  New Zealand<br>
						  <abbr title="Phone">Phone:</abbr> 09 281 5603
						</address>									
						<div class="map_box col-md-6 ">
							<iframe width="280" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=sushmobile&amp;aq=&amp;sll=-36.848125,174.766276&amp;sspn=0.013788,0.027874&amp;ie=UTF8&amp;hq=sushmobile&amp;hnear=&amp;t=m&amp;ll=-36.848125,174.766276&amp;spn=0.013788,0.027874&amp;output=embed"></iframe>
						</div>
					</div>	

					<div class="location_box">
						<address class="location_text col-md-6">
						  <strong>WELLINGTON OFFICE</strong><br>
						  Lv 16, 157 Lambton Quay<br>
						  Wellington<br>
						  New Zealand<br>					  
						  <abbr title="Phone">Phone:</abbr> 021 321-936
						</address>					
						<div class="map_box col-md-6 ">
							<iframe width="280" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.nz/maps?t=m&amp;q=157+Lambton+Quay,+Wellington&amp;ie=UTF8&amp;hq=&amp;hnear=157+Lambton+Quay,+Wellington,+6011&amp;ll=-41.282386,174.776516&amp;spn=0.01935,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>					
						</div>
					</div>	


				</div>
				<div class="col-sm-6 form_wrapper">	
						
											
						<h3><span class="icon_send glyphicon glyphicon-send"></span> &nbsp EMAIL US</h3>	
					   <?php echo do_shortcode( '[contact-form-7 id="156" title="Contact form 1"]' ); ?>	
					
					
				</div>
			</div>

			<div class="breakline"></div>		
			<div class="custom_footer">
					<a href="https://www.facebook.com/SushMobile" class="col-sm-3 col-xs-12">
						<span class="social_icon"><i class="fa fa-facebook-square fa-lg"></i>Find Sush Mobile on Facebook</span>
					</a>
					<a href="https://twitter.com/sushmobile" class="col-sm-3 col-xs-12">
						<span class="social_icon"><i class="fa fa-twitter-square fa-lg"></i>Find Sush Mobile on Twitter</span>		
					</a>
					<a href="http://www.linkedin.com/company/sush-global-solutions-limited" class="col-sm-3 col-xs-12">
						<span class="social_icon"><i class="fa fa-linkedin-square fa-lg"></i>Connect with Sush Mobile on Linkedin</span>		
					</a>
					<a href="http://www.youtube.com/sushmobile" class="col-sm-3 col-xs-12">
						<span class="social_icon"><i class="fa fa-youtube fa-lg"></i>Watch Sush Mobile on Youtube</span>		
					</a>
				<div class="footer_text">
					<span>All Rights Reserved - Sush Mobile 2013 </span>
					<!-- <span>Made In New Zealand</span>				 -->
				</div>
				
			</div>		
		</div>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
    
    
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.js"></script>	

	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/bookmarkscroll.js"></script>



    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/hammer.min.js"></script>
	
	<!-- Custom Javascript -->

    <script src="<?php bloginfo( 'template_url' ); ?>/js/application.js"></script>

    <?php if(in_category( '21' )){?>

    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/blueimp-gallery.css">	

    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.blueimp-gallery.min.js"></script>	
	<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-image-gallery.min.js"></script>	

	<?php } ?>
	 <?php wp_footer(); ?>
</body>
</html>