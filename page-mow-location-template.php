<?php /* Template Name: MOW Location Template */ ?>
<?php get_header(); ?>

<main id="content">
<section id="single-mow-location-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title()?></h1>

<?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>