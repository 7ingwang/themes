<?php
/*
* Template Name: Home
*/

get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">

<style>
.owl-dots{ text-align: center;}
.owl-dot{ display: inline-block; width: .5rem; height: .5rem; background: #050505 !important; border-radius: .25rem;}
.owl-dot+.owl-dot{ margin-left: .5rem;}
.owl-dot.active{ background: #E59100 !important;}
</style>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner">
    	<div class="carousel-item active">
	    	<a href="#">
				<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-cover-img.jpg" alt="First slide">
			</a>
    	</div>
		<div class="carousel-item">
			<a href="#">
				<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-cover-img.jpg" alt="Second slide">
			</a>
    	</div>
		<div class="carousel-item">
			<a href="#">
				<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-cover-img.jpg" alt="Third slide">
			</a>
    	</div>
  	</div>
  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
  		<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  		<span class="carousel-control-next-icon" aria-hidden="true"></span>
  		<span class="sr-only">Next</span>
  	</a>
</div>

<section class="front">
	<div class="container">
		<div class="row">
			<div class="col col-sm-8">
				<div class="block news">
					<h2 class="block-title">联合会快讯</h2>
					<div class="block-content">
						
						<div class="owl-carousel">
						<?php
						    $args=array(
						        'cat' => 1,   // 分类ID
						        'posts_per_page' => 10, // 显示篇数
						    );
						    query_posts($args);
						    if(have_posts()) : while (have_posts()) : the_post();
						?>
						    <div class="item">
							    <a href="<?php the_permalink(); ?>">
									<img class="cover" src="<?php echo catch_that_image();?>" alt="">
						            <h6 class="title"><?php the_title(); ?></h6>
						         </a>
							    
						        <p class="summary">
						        <?php if (has_excerpt()) {
						                echo $description = get_the_excerpt(); //文章编辑中的摘要
						            }else {
						                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 170,"……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
						            } ?>
						        </p>
						    </div>
						<?php endwhile; endif; wp_reset_query(); ?>
	  					</div>
	  					
					</div>
				</div>
			</div>
			<div class="col col-sm-4">
				<div class="block notice">
					<h2 class="block-title">通知公告<a href="<?php echo get_option('home'); ?>/?cat=12" class="float-right">更多</a></h2>
					<div class="block-content">
						<ul class="list">
						<?php $posts = get_posts( "category=1&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li>
							    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</li>
					   	<?php endforeach; ?>
					   	<?php endif; ?>
					   		<li class="banner"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="" ></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="timeline">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12">
				<div class="block pc">
					
					<div class="swiper-container">
					    <div class="swiper-wrapper">
						    
						    
						<?php $posts = get_home_posts( "category=1&numberposts=5&order=ASC" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<div class="swiper-slide">
								<div class="date"><?php the_time('Y-m-d');?></div>
								<div class="line"><div class="dot"></div></div>
							    <a href="<?php the_permalink() ?>" class="title" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</div>
						<?php endforeach; ?>
						<?php endif; ?>	
						</div>

						<div class="swiper-button-prev"><i class="oi oi-chevron-left"></i></div>
						<div class="swiper-button-next"><i class="oi oi-chevron-right"></i></div>
					</div>	
					
				</div>
				
				<div class="block m">					
					    
						<?php $posts = get_posts( "category=1&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<div class="swiper-slide">
								<div class="date"><?php the_time('Y-m-d');?></div>
								<div class="line"><div class="dot"></div></div>
							    <a href="<?php the_permalink() ?>" class="title" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</div>
						<?php endforeach; ?>
						<?php endif; ?>	
						</div>
					</div>	
				</div>

			</div>
		</div>
	</div>
</section>


<section class="blocks">
	<div class="container">
		<div class="row">
			
			<div class="col col-sm-6">
				<div class="block">
					<h2 class="block-title"><i class="icon icon-zixun icon-bg-blue"></i>行业资讯</h2>
					<div class="block-content">
					   	<ul class="list">
						<?php $posts = get_posts( "category=1&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li>
							    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							    <span><?php the_time('Y-m-d');?></span>
							</li>
					   	<?php endforeach; ?>
					   	<?php endif; ?>
				   	  	</ul>
				   	</div>
				   	<a href="<?php echo get_option('home'); ?>/?cat=1" class="more">更多</a>
				</div>
			</div>
			<div class="col col-sm-6">
				<div class="block">
					<h2 class="block-title"><i class="icon icon-map icon-bg-red"></i>物流园区</h2>
					<div class="block-content">
						<ul class="list">
						<?php $posts = get_posts( "category=4&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li>
							    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							    <span><?php the_time('Y-m-d');?></span>
							</li>
					   	<?php endforeach; ?>
					   	<?php endif; ?>
						</ul>
					</div>
					<a href="<?php echo get_option('home'); ?>/?cat=4" class="more">更多</a>
				</div>
			</div>
			<div class="col col-sm-6">
				<div class="block">
					<h2 class="block-title"><i class="icon icon-luntan icon-bg-green"></i>学术交流</h2>
					<div class="block-content">
						<ul class="list">
						<?php $posts = get_posts( "category=16&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li>
							    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							    <span><?php the_time('Y-m-d');?></span>
							</li>
					   	<?php endforeach; ?>
					   	<?php endif; ?>
						</ul>
					</div>
					<a href="<?php echo get_option('home'); ?>/?cat=16" class="more">更多</a>
				</div>
			</div>
			<div class="col col-sm-6">
				<div class="block">
					<h2 class="block-title"><i class="icon icon-zhaopin icon-bg-purple"></i>企业招聘</h2>
					<div class="block-content">
						<ul class="list">
						<?php $posts = get_posts( "category=17&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li>
							    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							    <span<?php the_time('Y-m-d');?></span>
							</li>
					   	<?php endforeach; ?>
					   	<?php endif; ?>
						</ul>
					</div>
					<a href="<?php echo get_option('home'); ?>/?cat=17" class="more">更多</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col col-sm-4">
				<div class="card" id="wuliu">
					<a href="<?php echo get_option('home'); ?>/?cat=14" class="more">更多</a>
					<i class="icon icon-wuliu"></i>
					<div class="card-body">
						<h5 class="card-title">物流标准</h5>
						<ul class="list">
						<?php $posts = get_posts( "category=14&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li>
							    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</li>
					   	<?php endforeach; ?>
					   	<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col col-sm-4">
				<div class="card" id="huiyuan">
					<a href="<?php echo get_option('home'); ?>/?cat=22" class="more">更多</a>
					<i class="icon icon-huiyuan"></i>
					<div class="card-body">
						<h5 class="card-title">会员风采</h5>
						<ul class="list">
						<?php $posts = get_posts( "category=1&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li>
							    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</li>
					   	<?php endforeach; ?>
					   	<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col col-sm-4">
				<div class="card" id="peixun">
					<a href="<?php echo get_option('home'); ?>/?cat=15" class="more">更多</a>
					<i class="icon icon-peixun"></i>
					<div class="card-body">
						<h5 class="card-title">人才培训</h5>
						<ul class="list">
						<?php $posts = get_posts( "category=17&numberposts=5" ); ?>
						<?php if( $posts ) : ?>
						<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
							<li>
							    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</li>
					   	<?php endforeach; ?>
					   	<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>


<script>
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	    items:3,
	    loop:true,
	    margin:20,
	    autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
		responsive:{
		 0:{ items:1 },
		 480:{ items:2},
		 768:{ items:3},
		}
	});
</script>

<script>        
  	var mySwiper = new Swiper ('.swiper-container', {
  	  direction: 'horizontal', // 垂直切换选项
  	  loop: false, // 循环模式选项
  	  slidesPerView: 4, //每组几个
  	  initialSlide: 10,
  	  
  	  // 如果需要前进后退按钮
  	  navigation: {
  	    nextEl: '.swiper-button-next',
  	    prevEl: '.swiper-button-prev',
  	  },
  	  
  	  
  	});       
</script>


<?php
get_footer();
