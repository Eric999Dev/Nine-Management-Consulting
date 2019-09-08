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
?>
<h3>Derniers articles</h3>
<ul>
    <?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=5');
    ?>
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
        <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
</ul>
<?php

get_footer();
