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
 <a id="button" href=""></a>   
<section id="presentation">
    <div class="container">
<span></span><h1>Présentation</h1>
<p>L’agence Nine Management-Consulting est une structure qui est en collaboration avec le cabinet d’agents Sport’s Business Academy  afin de pouvoir aider les joueurs dans leurs parcours sportifs dans la gestion de carrière (négociations de contrat, recherche de sponsor, mise en place de programme de préparation physique avec un préparateur physique diplômé). </p>
</div>  
</section>
<section id="us">
    <div class="container">
    <span></span><h1>Qui sommes-nous ?</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur provident ullam beatae maiores, delectus placeat saepe id libero eaque pariatur dolor, quasi, illo vero. Expedita distinctio exercitationem autem in reprehenderit!</p>
</div>
</section>
<section id="staff">
    <div class="container">
    <span></span><h1>Notre effectif</h1>
    <div class="wrap">
        <ul id="tab-nav">
            <li><a href="#" class="tab-nav-active onglet" data-tab="onglet1">CTO</a></li>
            <li><a href="#" class=" onglet" data-tab="onglet2">Webdesigner</a></li>
            <li><a href="#" class=" onglet" data-tab="onglet3">Agent</a></li>
        </ul>
        <div>
        <div id="onglet1" class="cto-profil tab tab-active">
        <img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="">
        <p>TANGUY Eric</p>
        <p>CTO of Nine Consulting Management</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur doloremqu</p>
        </div>
        <div id="onglet2" class="webdesigner-profil tab">
        <img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="">
        <p>TANGUY Eric</p>
        <p>Webdesigner of Nine Consulting Management</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur doloremqu</p>
        </div>
        <div id="onglet3" class="agent-profil tab">
        <img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="">
        <p>TANGUY Eric</p>
        <p>Agent of Nine Consulting Management</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur doloremqu</p>

        </div>
    </div>


    
    </div>
</section>
<section id="contact"></section>
<div class="container">
<span></span> <h1>Contact</h1>     
</div>
<section id="partenaire">
    <div class="container">
    <span></span><h1>Partenaires</h1>

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
    <span></span><h1>Actualités</h1>
    </div>
</section>

</main>

<?php

get_footer();
