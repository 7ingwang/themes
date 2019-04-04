<?php
/*
* Template Name: Contact
*/

get_header(); ?>

	<!-- Hero-->
	<section class="module-cover parallax text-center" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/module-7.jpg" data-overlay="0.1">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                <?php get_breadcrumbs(); ?>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- Hero end-->
	
	<!-- Blog-->
    <section class="module">
        <div class="container">
            <div class="row">
				<div class="col-lg-4 col-md-6">
                	<div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="icon-display"></span></div>
                        <div class="icon-box-title">
                            <h6>官方网站</h6>
                        </div>
                        <div class="icon-box-content">
                            <p><a href="http://www.dongfangmeidi.com">www.dongfangmeidi.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="icon-whatsapp"></span></div>
                        <div class="icon-box-title">
                            <h6>服务热线</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>电话：010-83802993</p>
                            <p>传真：010-83895355</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box text-center">
                        <div class="icon-box-icon"><span class="icon-paper-plane-o"></span></div>
                        <div class="icon-box-title">
                            <h6>办公地址</h6>
                        </div>
                        <div class="icon-box-content">
                            <p>北京市丰台区京辰瑞达大厦 806</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog end-->
    
    <!-- Map-->
    <section class="maps-container">
        <div class="map" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/map-clip.jpg"></div>
    </section>
    <!-- Map end-->

<?php get_footer(); ?>