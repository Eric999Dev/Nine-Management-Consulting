<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neufmc
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<section>
		
		<article>
			<div>
				<img src="<?php echo get_template_directory_uri() . '/images/logo-site.jpg' ?>" alt="">
			</div>
			<div>
				<h2>L'AGENCE</h2>
				<div>
					<div><a href="#presentation" class="menu-presentation">Présentation</a></div>
					<div><a href="#us" class="menu-us">Qui sommes-nous?</a> </div>
					<div><a href="#staff" class="menu-staff">Staff</a></div>
					<div><a href="#actualite" class="menu-actualite">Actualités</a> </div>
					<div><a href="#contact" class="menu-contact">Contact</a> </div>
					<div><a href="#partenaire" class="menu-partenaire">Partenaires</a></div>
					<div><a href="<?php bloginfo('url'); ?>/blog">Blog</a></div>
				</div>
			</div>
			<div>
				<h2>NOUS CONTACTER</h2>
				<address>
					Nine Management Consulting <br>
					25 rue des tuileris <br>
					75020 Paris <br>
					<a href="mailto:exemple@gmail.com"></a>exemple@gmail.com<br>
					<a href="tel:+33 95 54 12 36"></a> +33 95 54 12 36</a>
				</address>
			</div>
			<div class="rs">
				<h2>NOUS SUIVRE</h2>

				<a href="http://www.facebook.com/sharer.php?u=localhost:/projets/neufMc/&t=Nine_Consulting_Manager" class="facebook" target="_blank"></a>
				<a href="http://twitter.com/share?url=http://www.monsite.com&text=Texte du tweet" class="twitter" target="_blank"></a>
				<a href="" class="linkedin" target="_blank"></a>
				<a href="" class="instagram" target="_blank"></a>
			</div>
		</article>
		<div class="trait"></div>
		<p><a href="<?php bloginfo('url'); ?>/mentions-legales">Mentions Légales</a></p>
	</section>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>