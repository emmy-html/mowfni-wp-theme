<?php /* Template Name: About Meals On Wheels Page */ ?>

<?php get_header(); ?>

<main id="content">
<section id="about-mow-page-hero">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<section id="about-mow-page-locations">
            <div class="about-mow-page-locations-content">
                <article class="map">
                <?php if( get_field('multi_map') ): ?>
                    <?php the_field('multi_map'); ?>
                <?php endif; ?>
                </article>
                </article>
                <article class="map-locations">
                    <div class="content-wrapper">
                    <?php if( get_field('general_description') ): ?>
                    <p><?php the_field('general_description'); ?></p>
                    <?php endif; ?>
                    </div>
                    <div class="map-locations-container">

                    <?php 
$args = array( 'post_type' => 'locations', 'posts_per_page' => 100 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php the_content(); ?> 
<aside>
    <div class="content-wrapper">
        <div>
        <?php if( get_field('location_name') ): ?>
            <h3><?php the_field('location_name'); ?></h3>
        <?php endif; ?> 
        <?php if( get_field('location_address') ): ?>
            <p><?php the_field('location_address'); ?></p>
        <?php endif; ?> 
        <p class="location-more-info">
        <?php if( get_field('location_details') ): ?>
            <a href="<?php the_field('location_details'); ?>">Details &#8250;</a>
        <?php endif; ?>
        <?php if( get_field('location_route') ): ?>
            <a href="<?php the_field('location_route'); ?>">Route &#8250;</a>
        <?php endif; ?>
        </p>
        </div>
        <div>
        <?php if( get_field('location_type') ): ?>
            <h3 class="pick-up-time"><?php the_field('location_type'); ?>
        <?php endif; ?> 
        <?php if( get_field('location_times') ): ?>
            <span><?php the_field('location_times'); ?></span>
        <?php endif; ?> 
        <?php if( get_field('location_days') ): ?>
            <span><?php the_field('location_days'); ?></span>
        <?php endif; ?> 
        </h3>
        </div>
        <div>
            <h3>Manager:
            <?php if( get_field('location_manager') ): ?>
            <span><?php the_field('location_manager'); ?></span>
            <?php endif; ?> 
            <?php if( get_field('phone_number') ): ?>
            <span><?php the_field('phone_number'); ?></span>
            <?php endif; ?>
            </h3>
            </div>
            </div>
            </aside> 
<?php wp_reset_postdata(); ?>
<?php endwhile;  ?>
<?php endif; ?>
            </div>
           
                    </div>
                      <?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>