<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package neufmc
 */

get_header();

$imgPartenaire = get_field('partenaire_1'); 
$imgPartenaire1 = $imgPartenaire['url']; 

$imgPartenaire = get_field('partenaire_2'); 
$imgPartenaire2 = $imgPartenaire['url'];

$imgPartenaire = get_field('partenaire_3'); 
$imgPartenaire3 = $imgPartenaire['url'];

$imgPartenaire = get_field('partenaire_4'); 
$imgPartenaire4 = $imgPartenaire['url'];

$imgPartenaire = get_field('partenaire_5'); 
$imgPartenaire5 = $imgPartenaire['url'];
?>
<main>
    
<section id="presentation">
    <div class="container">
<h1>Présentation</h1>
<p>L’agence Nine Management-Consulting est une structure qui est en collaboration avec le cabinet d’agents Sport’s Business Academy  afin de pouvoir aide les joueurs dans leurs parcours sportifs dans la gestion de carrière (négociations de contrat, recherche de sponsor, mise en place de programme de préparation physique avec un préparateur physique diplômé). </p>
</div>  
</section>
<section id="us">
    <div class="container">
    <h1>Qui sommes-nous ?</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur provident ullam beatae maiores, delectus placeat saepe id libero eaque pariatur dolor, quasi, illo vero. Expedita distinctio exercitationem autem in reprehenderit!</p>
</div>
</section>
<section id="staff">
    <div class="container">
    <h1>Notre effectif</h1>

    </div>
</section>
<section id="contact"></section>
<div class="container">

</div>
<section id="partenaire">
    <div class="container">
    <h1>Partenaires</h1>

        <div class="slider">
    <div class="slide"><img src="<?= $imgPartenaire1?>" alt=""></div>
    <div class="slide"><img src="<?= $imgPartenaire2?>" alt=""></div>
    <div class="slide"><img src="<?= $imgPartenaire3?>" alt=""></div>
    <div class="slide"><img src="<?= $imgPartenaire4?>" alt=""></div>
    <div class="slide"><img src="<?= $imgPartenaire5?>" alt=""></div>

    </div>
</div>
</section>
<section id="actualite">
    <div class="container">
    <h1>Actualités</h1>
    </div>
</section>

</main>

<?php

get_footer();
