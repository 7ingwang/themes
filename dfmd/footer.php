<?php 
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dfmd
 */
?>

   		<!-- Footer-->
   		<footer class="footer">
           <div class="footer-widgets ">
               <div class="container">
                   <div class="row">                        	                            
                       <div class="col-md-12">
                           <!-- Twitter widget-->
                           <aside class="widget text-center">
                               <div class="widget-title">
                                   <h6>公众号</h6>
                               </div>
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/weixin.png" width="120" height="120" alt="">
                           </aside>
                       </div>
                   </div>
               </div>
           </div>
           <div class="footer-bar">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="copyright">
                               <p>© 2019 东方美地（北京）建筑装修装饰工程有限公司 版权所有</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </footer>
	   <!-- Footer end-->
        
    </div>
    <!-- Wrapper end-->

	<!-- To top button--><a class="scroll-top" href="#top"><i class="icon-chevron-up"></i></a>
	
<?php wp_footer(); ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c52ed4c5bf381fff98102b401854fb73";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>