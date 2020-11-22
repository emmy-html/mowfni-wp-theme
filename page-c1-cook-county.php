<?php /* Template Name: C1 Cook County Page */ ?>

<?php get_header(); ?>

<main id="content">
<section id="about-mow-page-hero">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<section id="about-mow-page-locations">
            <div class="about-mow-page-locations-content">
                <article class="map">
                <?php if( get_field('multi_map_1') ): ?>
                    <?php the_field('multi_map_1'); ?>
                <?php endif; ?>
                </article>
                </article>
                <article class="map-locations">
                    <div class="content-wrapper">
                    <?php if( get_field('general_description_1') ): ?>
                    <p><?php the_field('general_description_1'); ?></p>
                    <?php endif; ?>
                    </div>
                    <div class="map-locations-container">

                    <?php 
                    $args = array( 'post_type' => 'locations', 'tag' => 'c1-cook-county', 'posts_per_page' => 100, 'orderby' => 'title',
                    'order'   => 'ASC' );
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
        </article>
                    <article class="about-mow-page-programs">
                  <h1>More About Our Program</h1>
                    <div class="about-mow-page-programs-span">
                      <i class="fas fa-carrot fa-3x"></i>
                      <h2>Our Commitment</h2>
                      <p>Nutritional health is an important factor for remaining independent as we age. Meals on Wheels provides in-home delivery of hot meals five days a week. With support for good nutrition and healthy living, many older adults in our area are able to live safely and independently in their own homes.</p>
                    </div>
                    <div class="about-mow-page-programs-span">
                      <i class="fas fa-utensils fa-3x"></i>
                      <h2>How much do 
                        <span>the meals cost?</span></h2>
                      <p>There is no cost to participants. We do ask that all participants for a voluntary contribution. No one is ever denied service if they are unable or unwilling to contribute.</p>              
                    </div>
                    <div class="about-mow-page-programs-span">
                      <i class="fas fa-car fa-3x"></i>
                      <h2>How to get 
                        <span>Meals on Wheels</span></h2>
                      <p>If you or a loved one is in need of Meals on Wheels, you will need to first contact a case coordinator. Using the locator on this page, enter your zip code to find the nearest Meals on Wheels distribution location. Once you find a location click on its name to be taken to that locations home page. Here you will find contact information the case coordinator for that area as well as the manager of that location. If you have any questions about the proces for getting meals on wheels, our staff will be there to assist you. If you have any other questions, please feel free to contact our main office at (312) 207-5290.</p>
                    </div>
              </article>
            </div>
        </section>
                      <?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>