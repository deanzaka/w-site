<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Together
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- set no cache when needed -->
<!--
<meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
-->

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( is_front_page() ) : ?>
<header class="dt-site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dt-logo">

					<?php
					if ( function_exists( 'get_custom_logo' ) && has_custom_logo() ) :
						the_custom_logo();
					else : ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr( bloginfo( 'name' ) ); ?></a></h1>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() && $description != '' ) : ?>
						<span><i class="fa fa-heart"></i> </span>
						<p class="site-description"><?php echo $description; ?></p>
						<div class="dt-wedding-date"><?php $dt_countdown_date = esc_attr( get_theme_mod( 'dt_countdown_setting' ) ); echo date( 'l, F d, Y', strtotime( $dt_countdown_date )); ?></div>
					<?php endif; ?>

				</div><!-- .dt-logo -->
			</div><!-- .col-lg-12 -->
		</div><!-- .row -->
	</div><!-- .container -->

	<div class="dt-wedding-countdown" id="dt_wedding_day"></div><!-- .dt-wedding-countdown -->
</header><!-- .dt-site-header -->
<?php endif; ?>

<?php if ( ! is_front_page() ) : ?><div class="dt-menu-sep"></div><?php endif; ?>

<?php if( ! is_front_page() ) : ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="dt-breadcrumbs">
					<?php together_breadcrumb(); ?>
				</div><!-- .dt-breadcrumbs-->
			</div><!-- .col-lg-12 -->
		</div><!-- .row-->
	</div><!-- .container-->
<?php endif; ?>
