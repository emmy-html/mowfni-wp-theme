<?php /* Template Name: Hidden Donation Page Template */ ?>
<?php get_header(); ?>

<main id="content">
<section id="hidden-donation-page-template">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if( get_field('campaign_title') ): ?>
                    <h1><span><?php the_field('campaign_title'); ?></h1></span>
                <?php endif; ?>
            <div class="donation-page-content-container">
                <aside>
                <?php if( get_field('campaign_image') ): ?>
                    <img src="<?php the_field('campaign_image'); ?>" />
                <?php endif; ?>
                <?php if( get_field('campaign_description') ): ?>
                    <h2><?php the_field('campaign_description'); ?></h2>
                <?php endif; ?>
                </aside>
                <article>
              <div class="content-wrapper">
                <div class="donation-container">
                <?php if( get_field('donorbox_code') ): ?>
                    <?php the_field('donorbox_code'); ?>
                <?php endif; ?>
            </div>
              </div>
            </article>

<?php the_content(); ?>

<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>