<?php /* Template Name: Hidden Donation Page Template */ ?>
<?php get_header(); ?>

<main id="content">
<section id="hidden-donation-page-template">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>

<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>