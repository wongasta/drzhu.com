<?php get_header(); ?>

<div class="container-full allcontainer">
	<div id="top" class="subContainer">
	    <div class="row">
	        <div class="col-md-6 header-top">
	        	<div class="portrait">
	        		<img src="<?php echo get_template_directory_uri(); ?>/images/face.png" alt="Acupuncture Austin on Yelp" class="socialicon"/>
	        	</div>
	        </div>
	        <div class="col-md-6 col-xs-12">
	            <div class="textHolder">
	                <h2 class="bigF">Dr. Bindi Zhu</h2>

	                <h1 class="midF">Acupuncture Austin</h1>

	                <h2 class="midF">35+ Years Experience</h2>

	                <h2 class="smlF"><span class="redText">One of the Few Acupuncturist</span> in Austin with</h2>

	                <h2 class="midF"><span class="blueText">PhD</span>, <span class="blueText">MD (China)</span> and <span
	                        class="blueText">L.Ac</span></h2>
	            </div>
	            <div class="apptHolder">
	                <p class="apptHeader">Make Appointment Now!</p>

	                <p class="apptNumber">Call <span class="redText">(512) 457-0886</span></p>

	                <div class="row">
	                    <div class="col-md-12 col-ms-12 col-xs-12">
	                        <?php echo get_theme_mod( 'drzhu_section_a_contact' ); ?>
	                    </div>
	                </div>
	            </div>
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
		    <div class="row contentContainer">
	        	<?php echo get_theme_mod( 'drzhu_section_d_treatments' ); ?>
		    </div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
