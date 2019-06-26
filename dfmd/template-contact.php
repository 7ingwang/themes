<?php
/*
* Template Name: Contact
*/

get_header(); ?>

	<section class="module-page-title bg-gray bg-img" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/module-7.jpg" data-overlay="0.1">
    	<div class="container">
    	    <div class="row align-items-center">
    	        <div class="col-md-6">
    	            <div class="page-title-desc">
    	                <h1 class="page-title-heading"><?php the_title(); ?></h1>
    	            </div>
    	        </div>
    	        <div class="col-md-6">
    	            <ol class="breadcrumb">
    	                <?php get_breadcrumbs(); ?>
    	            </ol>
    	        </div>
    	    </div>
    	</div>
    </section>
	
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
                            <p>电话：400 005 8857</p>
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