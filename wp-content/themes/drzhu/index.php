<?php get_header(); ?>

<div class="container-full allcontainer">
	<div id="top" class="subContainer">
	    <div class="row">
	    	<div class="text-center face">
	        	<img src="<?php echo get_template_directory_uri(); ?>/images/face.png" alt="Acupuncture Austin on Yelp" class="socialicon"/>
	    	</div>
			<div class="titles text-center">
				<h1 class="midFF">Austin Acupuncture</h1>
	        	<h2 class="bigF">Dr. Bindi Zhu, L.Ac.</h2>
	        	<h3 class="midF">M.D.(China) and Ph.D in Traditional Chinese Medicine</h2>
	        	<h3 class="midF">11 year's medical education, 35 year's medical practice & teaching experience</h2>
	        </div>
	        <div class="quick-btns text-center">
	        	<a class="btn btn-default phone" href="tel://1-512-457-0886"><i class="fas fa-phone"></i> (512) 457-0886</a>
	        	<a class="btn btn-default email" href="mailto:bindizhu8@gmail.com">bindizhu8@gmail.com</a>
	        </div>
	    </div>
	</div>

	<div id="about" class="subContainer">
	    <div class="container">
	        <h3 class="subTitle">About Me</h3>

	        <div class="row contentContainer">
	            <div class="col-md-12 col-ms-12 col-xs-12">
	                <div class="textContainer">
	                    <?php echo get_theme_mod( 'drzhu_section_b_about_me' ); ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div id="theory" class="subContainer">
	    <div class="container">
	        <h3 class="subTitle">Testimonials</h3>

	        <div class="row contentContainer">
	            <div class="col-md-12 col-ms-12 col-xs-12">
	                <div class="theoryContainer">
	                    <?php echo get_theme_mod( 'drzhu_section_c_testimonials' ); ?>
						<div align="center"><a href="/testimonials/" class="btn btn-primary btn-lg active" role="button">Click Here for Patient Testimonials</a></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div id="treatments" class="subContainer">
		<div class="container">
		    <h3 class="subTitle">Treatments</h3>
		    <div class="row contentContainer treatments">
	        	<?php echo get_theme_mod( 'drzhu_section_d_treatments' ); ?>
		    </div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
