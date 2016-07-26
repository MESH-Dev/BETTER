<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<html>

<head>
	<meta charset="utf-8">
	<title>
		<?php if (is_front_page()){
			bloginfo('name');
		}else{
			bloginfo('name'); wp_title('|', 'true');
		}
		?>

	</title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<?php wp_head(); ?>

	<!-- Bugherd -->
	<script type='text/javascript'>
		(function (d, t) {
		  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
		  bh.type = 'text/javascript';
		  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=xu7uecwbwdpxjwvmzbtjgg';
		  s.parentNode.insertBefore(bh, s);
			  })(document, 'script');
	</script>

</head>

<body <?php body_class(); ?>>

	<div id="page" class='hfeed site'>
		<div class="sidr-trigger <?php if (is_front_page()) {echo "sidr-frontpage";}else{echo "sidr-interior";} ?>"><i class="fa fa-fw fa-lg fa-bars"></i></div>
		<?php //if (is_front_page()){ ?>

		<header class="<?php if (is_front_page()) {echo "frontpage";}else{echo "interior";} ?>">
			<div class="container">

				<div class="twelve columns"><!--  -->
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logomark-lg.png"></a>
						<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
					</div>
					<nav class="home-nav nav">
						<!-- <div class="home-sidr sidr-close"><i class="fa fa-fw fa-lg fa-close"></i><span class="sr-only"></span></div> -->
						<div class="home-funnel">
							<?php 

								$header_tagline = get_field('f_tagline', 'options');
								//var_dump($header_tagline);
							?>

							<p class="header-tagline">
								<?php echo $header_tagline; ?>
							</p>
							<ul class="funnel-links">

							<?php while (have_rows('funnel_links', 'options')) : the_row(); 

								$funnel_lt = get_sub_field('funnel_link_title', 'options');
								$funnel_text = get_sub_field('funnel_link_text', 'options');
								$funnel_link = get_sub_field('funnel_link', 'options');
								$funnel_lt_class = strtolower($funnel_lt);
								$the_title = get_the_title();
								// var_dump($the_title);

								//var_dump($funnel_lt);

							?>
								<li class="<?php echo $funnel_lt_class;?> <?php if($funnel_lt == $the_title){echo "active";} ?>">
									<a href="<?php echo $funnel_link; ?>" target="_self"> 
										<div class="funnel">
											<h3 class="funnel-title"><?php echo $funnel_lt; ?></h3>
											<p class="funnel-text"><?php echo $funnel_text; ?></p>
										</div>

									</a>
								</li>

							<?php endwhile; ?>

							</ul>
						</div>

						<div class="home-menu">
							<?php if(has_nav_menu('main_nav')){
									$defaults = array(
										'theme_location'  => 'main_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} ?>
						</div>

					</nav>
				</div>

			</div>
			<!-- <div class="sidr-trigger"><i class="fa fa-fw fa-lg fa-bars"></i></div> -->
		</header>

		<?php //}else{ ?>

		<!-- <header class="interior">
			<div class="container">

				
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/better-logo.png"></a>
					</div>
				
				
					<nav class="main-navigation nav">
						<div class="sidr-close"><i class="fa fa-fw fa-lg fa-close"></i><span class="sr-only"></span></div>
						<?php if(has_nav_menu('main_nav')){
									$defaults = array(
										'theme_location'  => 'main_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} ?>
					</nav>

				<div class="sidr-trigger"><i class="fa fa-fw fa-lg fa-bars"></i><span class="sr-only"></span></div>

			</div>
			
		</header>  -->
		<?php //} ?>
