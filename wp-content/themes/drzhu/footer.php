	<div id="contact" class="subContainer">
	    <div class="container">
	        <h3 class="subTitle">Contact Me</h3>

	        <div class="row contentContainer">
	            <div class="col-md-7 col-ms-7 col-xs-12 contactContainers">
	                <div class="mapContainer row">
	                    <div class="col-md-12 col-ms-12 col-xs-12">
	                        <h4>Acupuncture and Herb Health Clinic</h4>
	                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.977966751164!2d-97.78684048439476!3d30.266208981802276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b5334873d4a5%3A0x36d1a27ae8a410a!2s1008+Mo-Pac+Cir+%23201%2C+Austin%2C+TX+78746!5e0!3m2!1sen!2sus!4v1519321401487" width="570" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        					<?php echo get_theme_mod( 'drzhu_section_e_hours' ); ?>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-5 col-ms-5 col-xs-12 contactContainers">
	                <div class="contactInfo">
	                    <h3>Call to Make an Appointments</h3>
    					<?php echo get_theme_mod( 'drzhu_section_e_contacts' ); ?>

	                    <h3 class="socialHeader">Follow Me On</h3>

	                    <div class="row socialContainer">
	                        <div class="col-md-4 col-ms-4 col-xs-12">
	                            <a href="https://www.facebook.com/acupunctureaustintx/" target="_blank"><img
	                                    src="<?php echo get_template_directory_uri(); ?>/images/socialfb.png" alt="Acupuncture Austin on Facebook" class="socialicon"/></a>
	                        </div>
	                        <div class="col-md-4 col-ms-4 col-xs-12">
	                            <a href="https://www.yelp.com/biz/zhu-bindi-phd-austin-2" target="_blank"><img
	                                    src="<?php echo get_template_directory_uri(); ?>/images/socialyelp.png" alt="Acupuncture Austin on Yelp"
	                                    class="socialicon"/></a>
	                        </div>
	                        <div class="col-md-4 col-ms-4 col-xs-12">
	                            <a href="https://plus.google.com/b/105997154811280897211/?rel=author" target="_blank"><img
	                                    src="<?php echo get_template_directory_uri(); ?>/images/socialgoogleplus.png" alt="Acupuncture Austin on Google Plus"
	                                    class="socialicon"/></a>

	                        </div>
	                    </div>
	                    <div class="socialButtons">
	                        <ul class="list-unstyled">
	                            <li>
	                                <div class="fb-page" data-href="https://www.facebook.com/acupunctureaustintx/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/acupunctureaustintx/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/acupunctureaustintx/">Acupuncture Austin</a></blockquote></div>
	                            </li>
	                            <li>
	                                <!-- Place this code where you want the badge to render. -->
<a href="//plus.google.com/u/0/105997154811280897211?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
<span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px; margin-top:8px;">Austin Aupuncture</span><span style="display:inline-block;vertical-align:top;margin-right:15px; margin-top:8px;">on</span>
<img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/>
</a>
									<g:plusone size="tall"></g:plusone>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div id="contact-form" class="subContainer">
	    <div class="container">
	    	<div class="row">
			    <div class="col-md-6 col-md-offset-3" id="form_container">
			        <h3>Contact Us</h3>
			        <p>
			           Please send your message below. We will get back to you at the earliest!
			        </p>
			        <form role="form" method="post" id="reused_form">
			            <div class="row">
			                <div class="col-sm-12 form-group">
			                    <label for="message">
			                        Message:</label>
			                    <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
			                </div>
			            </div>
			            <div class="row">
			                <div class="col-sm-6 form-group">
			                    <label for="name">
			                        Your Name:</label>
			                    <input type="text" class="form-control" id="name" name="name" required>
			                </div>
			                <div class="col-sm-6 form-group">
			                    <label for="email">
			                        Email:</label>
			                    <input type="email" class="form-control" id="email" name="email" required>
			                </div>
			            </div>
			            <div class="row">
			                <div class="col-sm-6 form-group">
			                    <label for="name">
			                        Your Phone Number:</label>
			                    <input type="tel" class="form-control" id="name" name="phone" pattern='^\([0-9]{3}\)\s*[0-9]{3}-[0-9]{4}$' title='(999) 999-9999)' required>
			                </div>
			            </div>
			            <div class="row">
			                <div class="col-sm-12 form-group">
			                    <button type="submit" class="btn btn-lg btn-default pull-right" >Send →</button>
			                </div>
			            </div>
			        </form>
			        <div id="success_message" style="width:100%; height:100%; display:none; ">
			            <h4>Posted your message successfully!</h4>
			        </div>
			        <div id="error_message"
			                style="width:100%; height:100%; display:none; ">
			                    <h3>Error</h3>
			                    Sorry there was an error sending your form.

			        </div>
			    </div>
			</div>
	    </div>
	</div>

	<div id="footer">
	    <div class="row contentContainer">
	        <div class="col-md-6 col-ms-6 col-xs-12">
	            <div class="leftDiv">
	            	<?php echo get_theme_mod( 'drzhu_footer_left' ); ?>
	            </div>
	        </div>
	        <div class="col-md-6 col-ms-6 col-xs-12">
	            <div class="rightDiv">
	                <h4>Additional Resources</h4>

	                <p class="smallSocialIcons">
	                    <a href="https://www.facebook.com/acupunctureaustintx/" target="_blank"><img
	                            src="<?php echo get_template_directory_uri(); ?>/images/socialfb.png" alt="Acupuncture Austin on Facebook" class="socialicon"/></a>
	                    <a href="https://www.yelp.com/biz/zhu-bindi-phd-austin-2" target="_blank"><img
	                            src="<?php echo get_template_directory_uri(); ?>/images/socialyelp.png" alt="Acupuncture Austin on Yelp"
	                            class="socialicon"/></a>
	                    <a href="https://plus.google.com/b/105997154811280897211/?rel=author" target="_blank"><img
	                            src="<?php echo get_template_directory_uri(); ?>/images/socialgoogleplus.png" alt="Acupuncture Austin on Google Plus"
	                            class="socialicon"/></a>
	                </p>

	                <p class="smallSocialIcons">
	                    <a href="https://twitter.com/drzhu_acupunctr" target="_blank"><img
	                            src="<?php echo get_template_directory_uri(); ?>/images/socialtwitter.png" alt="Acupuncture Austin on Twitter" class="socialicon"/></a>
	                    <a href="https://www.pinterest.com/drzhu_acupuncture/" target="_blank"><img
	                            src="<?php echo get_template_directory_uri(); ?>/images/socialpin.png" alt="Acupuncture Austin on Pinterest"
	                            class="socialicon"/></a>
	                    <a href="https://www.instagram.com/drzhu_acupuncture/" target="_blank"><img
	                            src="<?php echo get_template_directory_uri(); ?>/images/socialinsta.png" alt="Acupuncture Austin on Instagram"
	                            class="socialicon"/></a>
	                </p>

	                <p><a href="http://drzhu.com/2004/index.htm" target="_blank">Old Website</a></p>
					
	                <h4>Referral Links</h4>
	            	<?php echo get_theme_mod( 'drzhu_footer_referrals' ); ?>
	            </div>
	        </div>
	    </div>
	</div>

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/myScripts.js"></script>

	<?php wp_footer(); ?>

	</body>
</html>
