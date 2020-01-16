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
	<script>
    if (window.innerWidth > 1366) {
        var head = document.getElementsByTagName('head')[0];

        var s1 = document.createElement("script");
        s1.type = "text/javascript";
        s1.src = "portfolio/wp-content/themes/mateusz/js/cloud-mobile.js";
        head.appendChild(s1);

    }
	</script>
	<?php wp_head(); ?>
</head>
<header class="animatedParent animateOnce">
	<a href="<?php echo home_url(); ?>" class="navbar_brand">
		<img src="<?php bloginfo('template_directory') ?>/img/logo_white.svg" alt="">
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
