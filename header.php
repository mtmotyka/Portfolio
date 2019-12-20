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
	<?php wp_head(); ?>
</head>
<header>
	<a href="<?php echo home_url(); ?>" class="navbar_brand">
		<img src="<?php bloginfo('template_directory') ?>/img/logo_white.svg" alt="">
	</a>
	<nav>
		<ul>
		<li>
			<a href="#">
				<span class="menu-item menu-item--base">Start</span>
				<span class="menu-item menu-item--clone">Start</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="menu-item menu-item--base">O mnie</span>
				<span class="menu-item menu-item--clone">O mnie</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="menu-item menu-item--base">Umiejętności</span>
				<span class="menu-item menu-item--clone">Umiejętności</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="menu-item menu-item--base">Doświadczenie</span>
				<span class="menu-item menu-item--clone">Doświadczenie</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="menu-item menu-item--base">Projekty</span>
				<span class="menu-item menu-item--clone">Projekty</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="menu-item menu-item--base">Kontakt</span>
				<span class="menu-item menu-item--clone">Kontakt</span>
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
