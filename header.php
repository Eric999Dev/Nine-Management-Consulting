<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neufmc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">


		<header id="masthead" class="site-header">

			<div class="btn-navigation">
				<div class="barre"></div>
				<div class="barre"></div>
				<div class="barre"></div>
			</div>

			<nav id="site-navigation" class="navigation">
				<ul>
					<li><a href="#presentation" class="menu-presentation">Présentation</a></li>
					<li><a href="#us" class="menu-us">Qui sommes-nous ?</a></li>
					<li><a href="#staff" class="menu-staff">Staff</a></li>
					<li><a href="#contact" class="menu-contact">Contact</a></li>
					<li><a href="#partenaire" class="menu-partenaire">Partenaires</a></li>
					<li><a href="#actualite" class="menu-actualite">Actualités</a></li>
					<li><a href="">Blog</a></li>
				</ul>
			</nav>


		</header><!-- #masthead -->

		<div id="content" class="site-content">