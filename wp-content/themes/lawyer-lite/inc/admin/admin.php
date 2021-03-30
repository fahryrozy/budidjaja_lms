<?php
//about theme info
add_action( 'admin_menu', 'lawyer_lite_abouttheme' );
function lawyer_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Lawyer Lite Theme', 'lawyer-lite'), esc_html__('About Lawyer Lite Theme', 'lawyer-lite'), 'edit_theme_options', 'lawyer_lite_guide', 'lawyer_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function lawyer_lite_admin_theme_style() {
   wp_enqueue_style('lawyer-lite-custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'lawyer_lite_admin_theme_style');

//guidline for about theme
function lawyer_lite_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'lawyer-lite'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( LAWYER_LITE_BUY_NOW ); ?>" ><?php esc_html_e('Buy Now', 'lawyer-lite'); ?></a>
			<a href="<?php echo esc_url( LAWYER_LITE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'lawyer-lite'); ?></a>
			<a href="<?php echo esc_url( LAWYER_LITE_PRO_DOC ); ?>" ><?php esc_html_e('Pro Documentation', 'lawyer-lite'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'lawyer-lite'); ?></button>
	<button class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'lawyer-lite'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'lawyer-lite'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( LAWYER_LITE_FREE_DOC ); ?>" ><?php esc_html_e('Documentation', 'lawyer-lite'); ?></a>
			<a href="<?php echo esc_url( LAWYER_LITE_CONTACT ); ?>"><?php esc_html_e('Support', 'lawyer-lite'); ?></a>
			<a href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'lawyer-lite'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'lawyer-lite'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'lawyer-lite'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'lawyer-lite'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'lawyer-lite'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'lawyer-lite'); ?></b> <?php esc_html_e('Set the front page: Go to Setting >> Reading >> Set the front page display static page to home page', 'lawyer-lite'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'lawyer-lite'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( LAWYER_LITE_BUY_NOW ); ?>" ><?php esc_html_e('Buy Now', 'lawyer-lite'); ?></a>
			<a href="<?php echo esc_url( LAWYER_LITE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'lawyer-lite'); ?></a>
			<a href="<?php echo esc_url( LAWYER_LITE_PRO_DOC ); ?>" ><?php esc_html_e('Pro Documentation', 'lawyer-lite'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.jpg" alt="" />
	  			<p><?php esc_html_e( 'This premium lawyer WordPress theme has a bold and impactful design just as the profession you deal in. It is an apt way to display your professionalism and dedication towards your work. The theme works perfectly for lawyers, law firms, legal consultants and consultancies, attorney websites, legal advisors and all those working in this field. This easy to set up theme spares you ample time to invest on your clients. The well designed layouts with proper allocation of sections result in a user-friendly theme. Every single element is included keeping in mind the purpose of this theme. All the information can be found out, without wandering here and there, within minutes of landing on the site. This premium lawyer theme can be installed and run by an amateur and a webmaster with equal ease without requiring any expertise in coding.The theme is added with exclusive features and functionality to deliver high-end performance. Its responsiveness makes it look beautiful on all device screen size. This premium lawyer WP theme is cross-browser compatible and retina ready to give crisp look on all browsers and devices. It offers easy customization of background, colour, header, footer, menu and other entities through customizer. It is significantly made search engine optimized to get a higher rank in search engine. Its multiple blog layouts, 100+ fonts and unlimited colours give you freedom to make your site look according to you wish. Each of its section has option to enable/disable it. Gallery and banner bring out your best image in front of your visitors. Testimonial section will give testimony of your services to let others get an idea of your capabilities. It is made compatible with premium WooCommerce and Contact Form 7 plugin. This premium lawyer theme gives you space to shift between full-width and boxed layout, whichever suits your site the best.', 'lawyer-lite' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'lawyer-lite' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo, Logo', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'lawyer-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Features', 'lawyer-lite' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script type="text/javascript">
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>
<?php } ?>