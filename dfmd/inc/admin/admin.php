<?php
defined( 'ABSPATH' ) or die();

/**
 *  dfmd theme info page 
 */
class dfmd_info_page 
{
	public static function get_menu_page() {
		add_action( 'admin_menu', array( 'dfmd_info_page', 'dfmd_info_page_menu' ) );
		add_action( 'admin_enqueue_scripts', array( 'dfmd_info_page', 'fontawesome_assests' ) );
	}
	
	public static function dfmd_info_page_menu() {
		$page1 = add_theme_page( __( 'Welcome to dfmd', 'dfmd' ), __( 'dfmd <i class="fa fa-star theme-icon"></i>', 'dfmd' ), 'manage_options', 'dfmd', array( 'dfmd_info_page','dfmd_display_theme_info_page') );
		add_action( 'admin_print_styles-'.$page1, array( 'dfmd_info_page','dfmd_info_page_assets' ) );
	}

	public static function dfmd_info_page_assets() {
		wp_enqueue_style( 'dfmd-bootstrap-css', get_template_directory_uri(). '/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'dfmd-font-awesome', get_template_directory_uri(). '/assets/font-awesome/css/fontawesome-all-v5.3.1.min.css' );
		wp_enqueue_style( 'dfmd-main-style', get_template_directory_uri(). '/assets/css/document_style.css' );

		wp_enqueue_script( 'dfmd-bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.js' );
		wp_enqueue_script( 'dfmd-popper', get_template_directory_uri(). '/assets/js/popper.js' );
	}

	public static function fontawesome_assests() {
		wp_enqueue_style( 'dfmd-font-awesome', get_template_directory_uri(). '/assets/font-awesome/css/fontawesome-all-v5.3.1.min.css' );
	}

	public static function dfmd_display_theme_info_page() {
		$theme_data = wp_get_theme();
	?>
		<div class="wrap elw-page-welcome about-wrap seting-page">
		    <div class="row col-md-12 settings">
		         <div class=" col-md-12">
		            <div class="col-md-12" style="padding:0">
						<h2><span class="elw_shortcode_heading"><?php printf( esc_html__( 'Welcome to %1$s ¬ Version %2$s', 'dfmd' ), esc_html( $theme_data->Name ), esc_html( $theme_data->Version )); ?> </span></h2>
						<p class="text-justify" style="font-size:19px;color: #555d66;"><?php _e( 'dfmd is a feature-loaded, user-friendly, fully responsive, Modern Design WordPress theme built with care and is loaded with SEO optimized code.Theme features a frontpage slider, Portfolio , Services ,Team, Clients, Blogs. dfmd allows you to fully customize your site without having to work with code. dfmd also features a live customizer, allowing you to change settings and preview them live.', 'dfmd' ); ?> </p>
		            </div>
					
				</div>
			</div>

            <!-- Themes & Plugin -->
            <div class="col-md-12  product-main-cont">
                <ul class="nav nav-tabs product-tbs">
				    <li class="active"><a data-toggle="tab" href="#start"> <?php _e( 'Getting Started', 'dfmd' ); ?> </a></li>
                </ul>

                <div class="tab-content">			
					<div id="start" class="tab-pane in active">
	                        <div class="space  theme active">							
	                            <div class="row p_plugin blog_gallery">
	                                <div class="col-xs-12 col-sm-7 col-md-7 p_plugin_pic">
	                                    <h4><?php _e( 'Step 1: Homepage Setup', 'dfmd' ); ?></h4>
										<ol>
										<li> <?php _e( 'First Download "weblizar-companion" Plugin (Its required to setup theme Home Page).', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Then Install it and activate it.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Create a new page name it as > "Home".', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Assign this "Home" >> "Home-Page" template , Save it.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Now Set this "Home" as custom static Home for your site', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Save changes and you are done.', 'dfmd' ); ?> </li>
										</ol>
	                                </div>
	                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
	                                    <div class="row p-box">
	                                         <div class="img-thumbnail">
											<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" class="img-responsive" alt="img"/>
	                                    </div>
	                                    </div>
	                                </div>
	                            </div>
													
								<div class="row p_plugin blog_gallery">
	                                <div class="col-xs-12 col-sm-4 col-md-12 p_plugin_pic">
	                                    <h4><?php _e( 'Step 2: Customizer Options Panel', 'dfmd' ); ?> </h4>
										<ol>
										<li> <?php _e( 'Go to Appearance -> Customize > Theme Options', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Theme General Options - Theme General Options use for logo width and height, and show search box.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Search Box - use to add search box on header.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Theme Slider Options - It is use to add slider image, title, description and enable/disable slider on homepage.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Service Options - It is use to add service title, description, service icon, title, description and enable/disable service on homepage.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Portfolio Options - It is use to add portfolio title, description, portfolio image, title, link and enable/disable portfolio on homepage.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Home Team Options - Use to add team title, description, team member name, image, designation and discription, profile link on homepage.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Home Client Options - Use to add client title, description, client name, image on homepage.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Home Blog Options - Use to add blog title, description, blog excerpt length and enable/disable blog section on homepage.', 'dfmd' ); ?> </li>
										<li> <?php _e( 'Footer Options - Use to add Customization text, developed by text and developed by link.', 'dfmd' ); ?> </li>
										</ol>
										<a class="add_page" href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php _e( 'Go to Customizer', 'dfmd' ); ?></a>
	                                </div>
	                            </div>	
	                        </div>
	                    </div>
                </div>
            </div>
        </div>
	<?php
	}
}
dfmd_info_page::get_menu_page();

?>