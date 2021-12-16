<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

/**
 * Fires at start of header.php, immediately before `genesis_title` action hook to render the Doctype content.
 *
 * @since 1.3.0
 */
do_action( 'genesis_doctype' );

/**
 * Fires immediately after `genesis_doctype` action hook, in header.php to render the document title.
 *
 * @since 1.0.0
 */
do_action( 'genesis_title' );

/**
 * Fires immediately after `genesis_title` action hook, in header.php to render the meta elements.
 *
 * @since 1.0.0
 */
do_action( 'genesis_meta' );

wp_head(); // We need this for plugins.
?>
<style id="fcp-critical-css">
	a{text-decoration:none !important;outline:none !important}a:hover{text-decoration:none !important;outline:none !important}body{font-family:'nexa-light'}@media (max-width: 768px){body{position:relative;left:0;margin-top:71px;overflow-x:hidden;transition:left 250ms ease-in-out}body.pushed-menu{left:400px;position:fixed}}@media (min-width: 769px){body{margin-top:133.81px}}body .container{padding:0}@media (min-width: 1200px){body .container{max-width:1166px}}@media (max-width: 768px){body .container{padding:0 16px}}body .gradient-overlay{position:absolute;background:linear-gradient(1deg, #2D3748 0%, #090B0E00 100%);height:100%;width:100%;bottom:0;left:0;opacity:0.6;transition:opacity 250ms ease-in-out}body .tb-button{color:#fff;background-color:#393939;outline:none !important;box-shadow:none !important;border:none;font-size:14px;font-weight:400;line-height:18px;padding:10px;border-radius:10px;height:42px;width:166px;display:inline-flex;align-items:center;justify-content:center}body .tb-button:hover{background-color:#595959;border:none}body .tb-button:focus{background-color:#595959;border:none}body .tb-button--transparent{width:120px;height:38px;background-color:rgba(242,244,248,0.2)}body .tb-button--transparent:hover{background-color:rgba(242,244,248,0.3)}@media (max-width: 768px){body .tb-button{width:117px;height:30px;border-radius:6px;font-size:12px}body .tb-button--transparent{width:88px;height:30px}}body .section-heading{font-family:'nexa-bold';font-size:40px;line-height:45px;letter-spacing:.64px;color:#221e38;margin-top:80px;margin-bottom:40px;text-transform:capitalize}@media (max-width: 768px){body .section-heading{font-size:20px;margin-top:20px;margin-bottom:10px}}@media (max-width: 768px){body .hide-mob{display:none !important}}@media (min-width: 769px){body .hide-desk{display:none !important}}body header.site-header{box-shadow:0px 5px 7px 0px rgba(161,161,161,0.3) !important;background:#fff;z-index:9999;box-shadow:none;position:relative}body header.site-header .desktop-menu-container{padding:0}body header.site-header .desktop-menu-container .tb-topbar{display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #e0e0e0}body header.site-header .desktop-menu-container .tb-topbar .topbar-social-media .tsm-widget .social-media-icons a{font-size:15px;color:#393939;transition:color 250ms ease-in-out;padding:0px 12px 0px 0px}body header.site-header .desktop-menu-container .tb-topbar .topbar-social-media .tsm-widget .social-media-icons a:hover{color:#0cd3ff}body header.site-header .desktop-menu-container .tb-topbar .topbar-menu-right .menu-topbar-menu-container ul{display:flex;margin:0}body header.site-header .desktop-menu-container .tb-topbar .topbar-menu-right .menu-topbar-menu-container ul li{padding:13px;line-height:100%}body header.site-header .desktop-menu-container .tb-topbar .topbar-menu-right .menu-topbar-menu-container ul li a{font-size:12px;font-weight:400;line-height:18px;letter-spacing:0;color:#393939;transition:color 250ms ease-in-out}body header.site-header .desktop-menu-container .tb-topbar .topbar-menu-right .menu-topbar-menu-container ul li a:hover{color:#0cd3ff}body header.site-header .desktop-menu-container .main-header{position:relative;display:flex;align-items:center;justify-content:space-between;padding:25px 0;background:#fff}body header.site-header .desktop-menu-container .main-header .hamburger{display:none}body header.site-header .desktop-menu-container .main-header .site-logo{width:163px}body header.site-header .desktop-menu-container .main-header .site-logo .custom-logo-link{aspect-ratio:auto}body header.site-header .desktop-menu-container .main-header .main-header-menu-right{display:flex}@media (min-width: 768px){body header.site-header .desktop-menu-container .main-header .main-header-menu-right{flex-grow:1}body header.site-header .desktop-menu-container .main-header .main-header-menu-right #quadmenu{margin-right:0}}body header.site-header .desktop-menu-container .main-header .search-toogle{padding:0 15px}body header.site-header .desktop-menu-container .main-header .search-toogle a{color:#393939}body header.site-header .desktop-menu-container .main-header .search-toogle a:hover{color:#0cd3ff}body header.site-header .desktop-menu-container .main-header .search-form{position:absolute;right:-10px;top:100%;background-color:#fff;padding:10px;box-shadow:0 2px 5px rgba(0,0,0,0.15);visibility:hidden;opacity:0;transform:translateY(10px);transition:all 250ms ease-in-out}body header.site-header .desktop-menu-container .main-header .search-form .probox{background:#f4f4f4 !important}body header.site-header .desktop-menu-container .main-header .search-form .probox .promagnifier{background:#393939 !important}body header.site-header .desktop-menu-container .main-header .search-form.show{visibility:visible;opacity:1;transform:translateY(0)}body header.site-header .desktop-menu-container .featuredpost article{padding:0 20px 0px 20px !important}body header.site-header .mobile-menu-container{display:none}@media (max-width: 768px){body header.site-header{position:fixed;top:0;left:0;width:100vw;padding:0 16px}body header.site-header .desktop-menu-container .tb-topbar{display:none !important}body header.site-header .desktop-menu-container .main-header{padding:10px 0;justify-content:center;z-index:99999}body header.site-header .desktop-menu-container .main-header .hamburger{display:block;position:absolute;left:0;top:19px;margin-right:10px}body header.site-header .desktop-menu-container .main-header .hamburger:hover,body header.site-header .desktop-menu-container .main-header .hamburger:focus{cursor:pointer}body header.site-header .desktop-menu-container .main-header .hamburger .top-line,body header.site-header .desktop-menu-container .main-header .hamburger .mid-line,body header.site-header .desktop-menu-container .main-header .hamburger .bot-line{background:#393939;color:#393939;width:1.7rem;height:2.36px;margin:6px;transition:transform 250ms ease-in-out, opacity 250ms ease-in-out}body header.site-header .desktop-menu-container .main-header .hamburger.toggle-close .top-line{transform:rotate(-45deg) translate3d(-8px, 8px, 0px)}body header.site-header .desktop-menu-container .main-header .hamburger.toggle-close .bot-line{transform:rotate(45deg) translate3d(-4px, -4px, 0px)}body header.site-header .desktop-menu-container .main-header .hamburger.toggle-close .mid-line{opacity:0;transform:translate3d(-4px, 0px, 0px)}body header.site-header .desktop-menu-container .main-header .main-header-menu-right{display:none}body header.site-header .mobile-menu-container{padding:71px 16px 20px;display:block;position:fixed;width:100%;top:0;left:-100%;overflow:hidden;background:#fff;height:100vh;overflow-y:scroll;transition:left 250ms ease-in-out}body header.site-header .mobile-menu-container #quadmenu .quadmenu-dropdown-menu{padding:0 !important}body header.site-header .mobile-menu-container.show{left:0}body header.site-header .mobile-menu-container .wp-searchform{margin-top:15px}body header.site-header .mobile-menu-container .wp-searchform-container{display:flex}body header.site-header .mobile-menu-container .wp-searchform-container button{background:#393939}}@media (min-width: 769px){body header.site-header{position:fixed;width:100%;top:0;transition:top 0.5s ease-in-out}body header.site-header.nav-up{top:-133.88px}}body .hero-banner{margin-bottom:20px}body .hero-banner .banner-container{display:flex;overflow:hidden;height:544px;border-radius:10px}body .hero-banner .banner-container .single-slide{width:25%;position:relative;overflow:hidden;color:#fff;transition:width 500ms ease-in-out}body .hero-banner .banner-container .single-slide .tb-button{margin-top:10px}body .hero-banner .banner-container .single-slide .gradient-overlay{opacity:0.9}body .hero-banner .banner-container .single-slide a{color:#fff}body .hero-banner .banner-container .single-slide span.dot{font-size:7px;position:relative}body .hero-banner .banner-container .single-slide span.dot i{position:absolute;left:-4px;top:0}body .hero-banner .banner-container .single-slide span:not(:last-child){margin-right:7px}body .hero-banner .banner-container .single-slide .blog-title{font-family:'nexa-bold';font-size:20px;margin:0}body .hero-banner .banner-container .single-slide .blog-desc{font-size:18px;line-height:24px;margin:10px 0}body .hero-banner .banner-container .single-slide__img{height:100%}body .hero-banner .banner-container .single-slide__img img{height:100%;object-fit:cover}body .hero-banner .banner-container .single-slide__content1,body .hero-banner .banner-container .single-slide__content2{position:absolute;bottom:60px;z-index:2;padding:0 30px;transition:opacity 500ms ease-in-out}body .hero-banner .banner-container .single-slide__content1{visibility:hidden;opacity:0;width:464px}body .hero-banner .banner-container .single-slide__content2{width:232px}body .hero-banner .banner-container .single-slide.show{width:50%;transition:width 500ms ease-in-out}body .hero-banner .banner-container .single-slide.show .single-slide__content1,body .hero-banner .banner-container .single-slide.show .single-slide__content2{transition:opacity 500ms ease-in-out}body .hero-banner .banner-container .single-slide.show .single-slide__content1{visibility:visible;opacity:1}body .hero-banner .banner-container .single-slide.show .single-slide__content2{opacity:0;visibility:hidden}@media (max-width: 768px){body .hero-banner .banner-container{flex-direction:column;height:615px}body .hero-banner .banner-container .single-slide{height:130px;width:100% !important;transition:height 500ms ease-in-out}body .hero-banner .banner-container .single-slide .blog-title{font-size:16px}body .hero-banner .banner-container .single-slide .blog-desc{font-size:14px;line-height:18px;margin:0px 0px 5px}body .hero-banner .banner-container .single-slide .category-container{font-size:12px;margin:0}body .hero-banner .banner-container .single-slide__img img{height:225px;width:100%}body .hero-banner .banner-container .single-slide__content1,body .hero-banner .banner-container .single-slide__content2{width:100% !important;bottom:10px}body .hero-banner .banner-container .single-slide__content1 .blog-title{margin-bottom:5px;opacity:0 !important;visibility:hidden !important}body .hero-banner .banner-container .single-slide__content1 .last-read{font-size:12px}body .hero-banner .banner-container .single-slide__content2{opacity:1 !important;visibility:visible !important;transform:translateY(0);transition:transform 300ms ease-in}body .hero-banner .banner-container .single-slide.show{height:225px}body .hero-banner .banner-container .single-slide.show .single-slide__content2{transform:translateY(-142px);opacity:0 !important;visibility:hidden !important}body .hero-banner .banner-container .single-slide.show .single-slide__content1 .blog-title{opacity:1 !important;visibility:visible !important}}@media (max-width: 1024px) and (min-width: 992px){body .hero-banner .single-slide__content1{width:372px}}@media (max-width: 768px) and (min-width: 450px){body .hero-banner .single-slide.show .single-slide__content2{transform:translateY(-100px)}}body .top-categories-container{display:flex;align-items:center}body .top-categories-single{height:238px;overflow:hidden;border-radius:10px;flex-basis:50%;position:relative}body .top-categories-single:not(:last-child){margin-right:20px}body .top-categories-single img{height:238px;width:100%;object-fit:cover;border-radius:10px;transition:transform 250ms ease-in-out}body .top-categories-single a:hover img{transform:scale(1.1)}body .top-categories-single-title{position:absolute;bottom:40px;color:#fff;transform:translate(-50%, -50%);left:50%;font-size:30px;width:100%;font-weight:bold;text-align:center}@media (max-width: 768px){body .top-categories-single{height:114px}body .top-categories-single:not(:last-child){margin-right:10px}body .top-categories-single img{height:114px}body .top-categories-single-title{font-size:16px;bottom:10px}}.fa,.far,.fas{font-family:"FontAwesome"}body.home header.site-header{box-shadow:none !important}
</style>
</head>
<?php
genesis_markup(
	[
		'open'    => '<body %s>',
		'context' => 'body',
	]
);

if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}

/**
 * Fires immediately after the `wp_body_open` action hook.
 *
 * @since 1.0.0
 */
do_action( 'genesis_before' );

genesis_markup(
	[
		'open'    => '<div %s>',
		'context' => 'site-container',
	]
);

/**
 * Fires immediately after the site container opening markup, before `genesis_header` action hook.
 *
 * @since 1.0.0
 */
do_action( 'genesis_before_header' );

/**
 * Fires to display the main header content.
 *
 * @since 1.0.2
 */
//do_action( 'genesis_header' );

/**
 * Fires immediately after the `genesis_header` action hook, before the site inner opening markup.
 *
 * @since 1.0.0
 */
do_action( 'genesis_after_header' );
?>
<header class="site-header">
	<div class="container desktop-menu-container">
		<div class="tb-topbar">
			<?php
 				if ( is_active_sidebar( 'topbar-social-media' ) ) : ?>
	 				<div id="topbar-social-media" class="topbar-social-media" role="complementary">
	 					<?php dynamic_sidebar( 'topbar-social-media' ); ?>
	 				</div>
 			<?php endif; ?>
			<div class="topbar-menu-right">
				<?php wp_nav_menu( array( 'theme_location' => 'topbar-menu' ) ); ?>	
			</div>
		</div>
		<div class="main-header">
			<!--Toggle Start -->
			<div id="togglerBtn" class="hamburger">
				<div class="top-line"></div>
				<div class="mid-line"></div>
				<div class="bot-line"></div>
			</div><!-- Toggler End-->
			<div class="site-logo">
				<?php
					// Display the Custom Logo
					the_custom_logo();

					// No Custom Logo, just display the site's name
					if (!has_custom_logo()) {
    			?>
    			<h1><?php bloginfo('name'); ?></h1>
    			<?php } ?>
			</div>
			<div class="main-header-menu-right align-items-center position-relative">
				<?php wp_nav_menu(array( 'theme_location' => 'primary' )); ?>
				<div class="search-toogle">
					<a href="javascript:void(0);" class="fa fa-search"></a>
				</div>
				<div class="search-form"><?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?></div>
			</div>
		</div>
	</div>

	<!-- mobile menu -->
	<div class="mobile-menu-container">
		<div class="mobile-menu-container-expandable">
			<?php wp_nav_menu(array( 'theme_location' => 'mobile-menu' )); ?>
				<form role="search" method="get" id="searchform" class="wp-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div class="wp-searchform-container">
						<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
						<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
						<button type="submit" id="searchsubmit"><span class="icon"><i class="fa fa-search"></i></span></button>
					</div>
				</form>
		</div>
	</div>
</header>
<?php
/* genesis_markup(
	[
		'open'    => '<div %s>',
		'context' => 'site-inner',
	]
);
genesis_structural_wrap( 'site-inner' ); */
