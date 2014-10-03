<?php
	$_SERVER['themeAssetPath'] = '/wp-content/themes/serviceteam/images/';
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php esc_attr_e( get_bloginfo( 'name' ), 'Service Team' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/serviceteam/ie-l9.css"" />
<![endif]-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="/wp-content/themes/serviceteam/js/modernizr.js"></script>
<script>
	Modernizr.load([
	// Functional polyfills
	{
		// This just has to be truthy
		test : Modernizr.websockets && window.JSON,
		// socket-io.js and json2.js
		nope : '/wp-content/themes/serviceteam/js/html5.js',
		// You can also give arrays of resources to load.
		complete : function () {
		// Run this after everything in this group has downloaded
		// and executed, as well everything in all previous groups
		}
	},
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
  <div id="header" class="header">
    <img class="header--image" src="//serviceteam.london/wp-content/themes/serviceteam/images/migrated/s_mt_logo.gif">
    <span class="header--contact">0800 111 1111</span>
    <div id="global-menu">
		<?php include "nav-custom.php" ?>
		<?php 
			//$hideSearchLabel = true;//searchform.php seems to not be able to see this var
			get_search_form(); 
		?>
	</div>
  </div>
  