<?php
/*
* Template Name: Home
*/

get_header(); ?>


	<!-- Wrapper-->
        <div class="wrapper">
            <!-- Hero-->
            <section class="module-cover-slides fullscreen">
                <ul class="slides-container">
                    <li class="parallax text-center" data-overlay="0"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/module-1.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="m-b-20"><strong>无毒地坪漆专家</strong></h1>
                                    <p class="m-b-40">NON-TOXIC FLOOR PAINT EXPERT</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="parallax" data-overlay="0.3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/module-2.jpg" alt="">
                    </li>
                    <li class="parallax text-center" data-overlay="0.3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/module-3.jpg" alt="">
                    </li>
                    <li class="parallax text-center" data-overlay="0.3" data-gradient="1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/module-4.jpg" alt="">
                    </li>
                </ul>
                <div class="slides-navigation"><a class="prev" href="#"><span class="icon-chevron-left"></span></a><a class="next" href="#"><span class="icon-chevron-right"></span></a></div>
            </section>
            <!-- Hero end-->

            <!-- About-->
            <section class="module divider-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 m-auto text-center">
                            <h1>东方美地</h1>
                            <p class="lead">无毒地坪漆专家</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-mY="30px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box text-center">
                                <a href="http://dfmd.smartwell.cn/service">
	                                <div class="icon-box-icon"><span class="icon-paint-format"></span></div>
	                            </a>
                                <div class="icon-box-title">
                                    <h6>服务介绍</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>一站式涂刷服务</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box text-center">
                                <a href="http://dfmd.smartwell.cn/scope">
	                                <div class="icon-box-icon"><span class="icon-road"></span></div>
	                            </a>
                                <div class="icon-box-title">
                                    <h6>业务范围</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>好漆，好服务，健康马上住</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box text-center">
	                            <a href="http://dfmd.smartwell.cn/process">
                                	<div class="icon-box-icon"><span class="icon-list-numbered"></span></div>
                                </a>
                                <div class="icon-box-title">
                                    <h6>服务流程</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>细致呵护、专业品质</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box text-center">
	                            <a href="http://dfmd.smartwell.cn/city">
                                <div class="icon-box-icon"><span class="icon-earth"></span></div>
                                </a>
                                <div class="icon-box-title">
                                    <h6>服务城市</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>提供传统的产品和施工服务</p>
                                </div>
      
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About end-->

            <!-- Portfolio-->
            <section class="module p-b-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 m-auto text-center">
                            <h2>热门产品</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="60px"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row row-portfolio" data-columns="3">
                        <div class="grid-sizer"></div>
                        <?php
						$args=array(
						    'cat' => 9,   // 分类ID
						    'posts_per_page' => 3, // 显示篇数
						);
						query_posts($args);
						if(have_posts()) : while (have_posts()) : the_post();
						?>
                        <div class="portfolio-item">
                            <div class="portfolio-item-wrapper">
                                <div class="portfolio-item-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image();?>" alt="<?php the_title(); ?>"></a></div>
                                <div class="portfolio-item-caption">
                                    <h6 class="portfolio-item-title"><?php the_title(); ?></h6><span class="portfolio-item-subtitle serif"><?php the_excerpt(); ?></span>
                                </div><a class="portfolio-item-link" href="<?php the_permalink(); ?>"></a>
                            </div>
                        </div>
                        <?php endwhile; endif; wp_reset_query(); ?> 
                    </div>
                </div>
            </section>
            <!-- Portfolio end-->


            <!-- Posts-->
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 m-auto text-center">
                            <h2>最新资讯</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="60px"></div>
                        </div>
                    </div>
                    <div class="row row-post-masonry">
                        

						<?php
						$args=array(
						    'cat' => 8,   // 分类ID
						    'posts_per_page' => 3, // 显示篇数
						);
						query_posts($args);
						if(have_posts()) : while (have_posts()) : the_post();
						?>
	                        
	                    <!-- Post-->
	                    <div class="col-md-4 post-item">
                            <article class="post">
                                <div class="post-preview"><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image();?>" alt="<?php the_title(); ?>"></a></div>
                                <div class="post-wrapper">
                                    <div class="post-header">
                                        <h2 class="post-title"><a href="blog-single.html"><?php the_title(); ?></a></h2>
                                        <p class="post-date"> 
											<?php echo esc_html( wl_theme_get_post_publish_date( get_the_id() ) ); ?>
				                		</p>
                                    </div>
                                    <div class="post-content">
                                        <p><?php if (has_excerpt()) {
						                echo $description = get_the_excerpt(); //文章编辑中的摘要
						            }else {
						                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100,"……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
						            } ?></p>
                                        <p><a href="<?php the_permalink(); ?>">阅读更多</a></p>
                                    </div>
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>
                            
						<?php endwhile; endif; wp_reset_query(); ?> 
                        
                    </div>
                </div>
            </section>
            <!-- Posts end-->

            <!-- Counters-->
            <section class="module bg-gray p-b-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="counter">
                                <div class="counter-icon"><span class="icon-stats-dots"></span></div>
                                <div class="counter-number">
                                    <h6><strong class="counter-timer" data-from="0" data-to="9534">0</strong></h6>
                                </div>
                                <div class="counter-title">累计客户</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter">
                                <div class="counter-icon"><span class="icon-leaf1"></span></div>
                                <div class="counter-number">
                                    <h6><strong class="counter-timer" data-from="0" data-to="124">0</strong></h6>
                                </div>
                                <div class="counter-title">特色产品</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter">
                                <div class="counter-icon"><span class="icon-user-tie"></span></div>
                                <div class="counter-number">
                                    <h6><strong class="counter-timer" data-from="0" data-to="9534">0</strong></h6>
                                </div>
                                <div class="counter-title">满意客户</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter">
                                <div class="counter-icon"><span class="icon-clipboard	"></span></div>
                                <div class="counter-number">
                                    <h6><strong class="counter-timer" data-from="0" data-to="234">0</strong></h6>
                                </div>
                                <div class="counter-title">项目新订单</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counters end-->

            <!-- Image-->
            <section class="module no-gutters p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/module-bottom.jpg" alt=""></div>
                    </div>
                </div>
            </section>
            <!-- Image end-->


<?php
get_footer();