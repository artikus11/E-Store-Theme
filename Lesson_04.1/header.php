<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<!-- header modal -->
		<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
			aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;</button>
						<h4 class="modal-title" id="myModalLabel">Не тормози, регайся!</h4>
					</div>
					<div class="modal-body modal-body-sub">
						<div class="row">
							<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
								<div class="sap_tabs">
									<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
										<ul>
											<li class="resp-tab-item" aria-controls="tab_item-0"><span>Авторизация</span></li>
											<li class="resp-tab-item" aria-controls="tab_item-1"><span>Регистрация</span></li>
										</ul>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="facts">
												
												<div class="register">
													<?php get_template_part( '/woocommerce/includes/parts/wc-form', 'login');?>
												</div>
											</div>
										</div>
										<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">
												<div class="register">
													<?php get_template_part( '/woocommerce/includes/parts/wc-form', 'register');?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="OR" class="hidden-xs">ИЛИ</div>
							</div>
							<div class="col-md-4 modal_body_right modal_body_right1">
								<div class="row text-center sign-with">
									<div class="col-md-12">
										<h3 class="other-nw">Воспользуйся соцсетями</h3>
									</div>
									<div class="col-md-12">
										<ul class="social">
											<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
											<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
											<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
											<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header modal -->
		<!-- header -->
		<div class="header" id="home1">
			<div class="container">
				<div class="w3l_login">
					<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
				</div>
				<div class="w3l_logo">
					<?php $logo_id = carbon_get_theme_option('est_header_logo');
					$logo = $logo_id ? wp_get_attachment_image_src($logo_id , 'full') : '';
					$site_name = carbon_get_theme_option('est_header_site_name') ? carbon_get_theme_option('est_header_site_name') : get_bloginfo('name');
					$site_decs = carbon_get_theme_option('est_header_site_desc') ? carbon_get_theme_option('est_header_site_desc') : get_bloginfo('description');
					?>
					
					
					<?php if (is_front_page() && is_home()) :
						if ($logo_id) :	?>
						<h1>
							<a href="<?php echo home_url('/');?>"> <img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">
							</a>
						</h1>
							<?php else: ?>
							<h1>
								<a href="<?php echo home_url('/');?>">
									<?php echo $site_name; ?><span><?php echo $site_decs; ?></span>
								</a>
							</h1>
						<?php endif;?>
					<?php else:
						if ($logo_id) :	?>
						<h1>
							<img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">
							
						</h1>
					<?php else: ?>
						<h1>
					
								<?php echo $site_name; ?><span><?php echo $site_decs; ?></span>

						</h1>
					<?php endif;?>
					<?php endif;?>
				</div>
				<div class="search">
					
					<input class="search_box" type="checkbox" id="search_box">
					<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
					<div class="search_form">
						<form method="POST" action="<?php esc_url( home_url( '/' ) );?>">
							<input type="text" value="<?php get_search_query();?>" name="s" placeholder="Искать...">
							<input type="submit" value="Поиск">
						</form>
						<div class="search-result"></div>
					</div>
				</div>
				<div class="cart cart box_1">
					<?php estore_woocommerce_cart_link();?>
					

				</div>
			</div>
		</div>
		<!-- //header -->
		<!-- navigation -->
		<div class="navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li><a href="index.html" class="act">Home</a></li>
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<h6>Mobiles</h6>
												<li><a href="products.html">Mobile Phones</a></li>
												<li><a href="products.html">Mp3 Players <span>New</span></a></li>
												<li><a href="products.html">Popular Models</a></li>
												<li><a href="products.html">All Tablets<span>New</span></a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<h6>Accessories</h6>
												<li><a href="products1.html">Laptop</a></li>
												<li><a href="products1.html">Desktop</a></li>
												<li><a href="products1.html">Wearables <span>New</span></a></li>
												<li><a href="products1.html"><i>Summer Store</i></a></li>
											</ul>
										</div>
										<div class="col-sm-2">
											<ul class="multi-column-dropdown">
												<h6>Home</h6>
												<li><a href="products2.html">Tv</a></li>
												<li><a href="products2.html">Camera</a></li>
												<li><a href="products2.html">AC</a></li>
												<li><a href="products2.html">Grinders</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<div class="w3ls_products_pos">
												<h4>30%<i>Off/-</i></h4>
												<img src="images/1.jpg" alt=" " class="img-responsive" />
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="about.html">About Us</a></li>
							<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="codes.html">Short Codes</a></li>
								</ul>
							</li>
							<li><a href="mail.html">Mail Us</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- //navigation -->
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'estore' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
