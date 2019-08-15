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
			<img src="<?php echo get_template_directory_uri() .'/images/logo-site.jpg'?>" alt="">
		</div>
		<div>
			<h2>L'AGENCE</h2>
			<div>
				<div><a href="#presentation">Présentation</a></div>
				<div><a href="#us">Qui sommes-nous?</a> </div>
				<div><a href="#staff">Staff</a></div>
						<div><a href="#actualite">Actualités</a> </div>
				<div><a href="#contact">Contact</a> </div>
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
		<div>
			<h2>NOUS SUIVRE</h2>
		</div>
		</article>
		<p><a href=""></a>Mentions Légales</p>
		</section>
		
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
