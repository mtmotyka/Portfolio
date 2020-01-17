<?php
/*
* Template Name: Thank You Page
*/


?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<header class="animatedParent animateOnce">
	<a href="/#home" class="navbar_brand animated slower fadeInDown">
		mateusz_
	</a>
	<nav class="animated slower fadeInDown">
		<ul>
		<li>
			<a href="/#about">
				<span class="menu-item menu-item--base"><span class="number">01. </span>O mnie</span>
				<span class="menu-item menu-item--clone"><span class="number">01. </span>O mnie</span>
			</a>
		</li>
		<li>
			<a href="/#skills">
				<span class="menu-item menu-item--base"><span class="number">02. </span>Umiejętności</span>
				<span class="menu-item menu-item--clone"><span class="number">02. </span>Umiejętności</span>
			</a>
		</li>
		<li>
			<a href="/#experience">
				<span class="menu-item menu-item--base"><span class="number">03. </span>Doświadczenie</span>
				<span class="menu-item menu-item--clone"><span class="number">03. </span>Doświadczenie</span>
			</a>
		</li>
		<li>
			<a href="/#contact">
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
<body>
<section class="thanks-section">
	<div class="message-info">
		<h2>Super! Twoja wiadomośc została wysłana.</h2>
		<a href="/" class="btn_custom_blue btn_big">Strona główna</a>
	</div>
</section>
<?php wp_footer(); ?>
</body>
</html>