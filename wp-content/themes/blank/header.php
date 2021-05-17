<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggoyr0ixcbmqv3xipma34md+dh/1fq784/j6cy/ijtquohcwr7x9jvorxt2mzw1t" crossorigin = "anonymous">

	<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/x+965dzo0rt7abk41jstqiaqvgrvzpbzo5smxkp4yfrvh+8abtte1pi6jizo" crossorigin = "anonymous"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	
	<div style = "background-color: #003399; height: 60px; margin-top: 50px;" class = "Top">
		
		 
		<img style = "position: absolute; height: 400px; width: 1000px; margin-top: -145px; margin-left: 100px; " 
		class = Logo src="http://localhost/LabongPress/wp-content/uploads/2021/04/LOGO.png">
		<a style = "position: absolute; font-size: 25px; margin-left: 900px; margin-top: 19px; color: white;" class = "Home" href = "http://localhost/LabongPress/">HOME</a>
		<a style = "position: absolute; font-size: 25px;margin-left: 1000px; margin-top: 19px; color: white;" class = "Services" href="http://localhost/LabongPress/services/">SERVICES</a>
		<a style = "position: absolute; font-size: 25px; margin-left: 1150px; margin-top: 19px; color: white;" class = "AboutUs" href="http://localhost/LabongPress/about/">ABOUT US</a>
		<a style = "position: absolute; font-size: 25px; margin-left: 1300px; margin-top: 19px; color: white;" class = "Contact" href="http://localhost/LabongPress/contact-us/	">CONTACT</a>
		<a style = "position: absolute; font-size: 25px; margin-left: 1450px; margin-top: 19px; color: white;" class = "Contact" href="http://localhost/LabongPress/shop/">PRODUCTS</a>
		<a style = "position: absolute; font-size: 25px; margin-left: 1620px; margin-top: 19px; color: white;" class = "Contact" href="http://localhost/LabongPress/cart/">CART</a>
		<a style = "position: absolute; font-size: 25px; margin-left: 1720px; margin-top: 19px; color: white;" class = "Contact" href="http://localhost/LabongPress/checkout/">OUT</a>
		

	</div>