<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ) ?>; charset=<?php bloginfo( 'charset' ) ?>" />
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
		<meta name="description" content="The official website for the New York General Assembly and the Occupy Wall Street Movement." />
		<?php do_action( 'bp_head' ) ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />

		<?php
			if ( is_singular() && bp_is_blog_page() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			wp_head();
		?>
	</head>

	<body <?php body_class() ?> id="bp-default">
		<div id="header-section">
		<?php do_action( 'bp_before_header' ) ?>
		<div id="header">
			<hgroup>
				<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
			
			<div id="navigation" role="navigation">
				<?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'primary', 'fallback_cb' => 'bp_dtheme_main_nav' ) ); ?>
			</div>

			<?php do_action( 'bp_header' ) ?>

		</div><!-- #header -->
		</div> <!-- header-section -->
		<?php do_action( 'bp_after_header' ) ?>
		<?php do_action( 'bp_before_container' ) ?>
		
		<div id="blurb" style="height:170px">
               <div style="float:left;">
                       <iframe width="250" height="170" src="http://www.youtube.com/embed/Sj66DB_PKz0" frameborder="0" allowfullscreen></iframe>
               </div>
               <div style="margin-left:260px">
                       <h4 style="margin-bottom:6px">Thursday, November 17, 2011</h4>
                       <h3 style="margin-bottom:6px">International Day of Action</h3>
                       <h4 style="margin-bottom:6px;">Find Out More: <a href="http://occupywallst.org/action/november-17th/" target="_blank">http://occupywallst.org/action/november-17th/</a></h4>
                       <h4>Get Housing Information: <a href="http://www.nycga.net/resources/housing-support/" target="_blank">http://www.nycga.net/resources/housing-support/</a></h4>
               </div>
       </div>
		<? if( ! is_user_logged_in() ){ ?>
			<!-- <div style="float:left;">
				<iframe width="335" height="170" src="https://www.youtube.com/embed/6dtD8RnGaRQ?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<div style="margin-left:355px">
				<h3 style="margin-bottom:6px;">Welcome to the new <em>and improved</em> New York City General Assembly<br/>Currently occupying Zuccotti Park.</h3>
				Read our <a href="/resources/declaration/">Declaration</a><br />
				<a href="/register">Create an Account</a><br />
				Join some <a href="/groups">groups</a><br />
				or <a href="/how-to-help/">find other ways to help</a>
			</div>
		</div> -->
		<? } ?>

		<div id="container">
