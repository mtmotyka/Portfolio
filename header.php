<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mateusz
 */

 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156416419-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-156416419-1');
	</script>
	<?php wp_head(); ?>
</head>
<header class="animatedParent animateOnce">
	<a href="#home" class="navbar_brand animated slower fadeInDown">
		mateusz_
	</a>
	<nav class="animated slower fadeInDown">
		<ul>
		<li>
			<a href="#about">
				<span class="menu-item menu-item--base"><span class="number">01. </span>O mnie</span>
				<span class="menu-item menu-item--clone"><span class="number">01. </span>O mnie</span>
			</a>
		</li>
		<li>
			<a href="#skills">
				<span class="menu-item menu-item--base"><span class="number">02. </span>Umiejętności</span>
				<span class="menu-item menu-item--clone"><span class="number">02. </span>Umiejętności</span>
			</a>
		</li>
		<li>
			<a href="#experience">
				<span class="menu-item menu-item--base"><span class="number">03. </span>Doświadczenie</span>
				<span class="menu-item menu-item--clone"><span class="number">03. </span>Doświadczenie</span>
			</a>
		</li>
		<li>
			<a href="#contact">
				<span class="menu-item menu-item--base"><span class="number">04. </span>Kontakt</span>
				<span class="menu-item menu-item--clone"><span class="number">04. </span>Kontakt</span>
			</a>
		</li>
		</ul>
	</nav>
	<button type="button" class="hamburger hamburger--squeeze hamburger_nav">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</button>
</header>

<body <?php body_class(); ?>>
