<?php /* Template Name: New Donate Page Template */ ?>
<?php get_header(); ?>

<main id="content">
    <section id="new-donate-page">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="donation-page-content-container">
        <article>
                    <div class="content-wrapper">
                        <div class="donation-container">
                            <script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe
                                allowpaymentrequest="" frameborder="0" height="900px" name="donorbox" scrolling="no"
                                seamless="seamless"
                                src="https://donorbox.org/embed/make-sure-no-older-adult-goes-hungry"
                                style="max-width: 500px; min-width: 250px; max-height: none;" width="100%"></iframe>
                        </div>
                    </div>
                </article>
                <aside class="faq-and-desc">
                    <div class="content-wrapper">
                        <h2>Generous donors who are able to give monthly provide a steady and reliable source of
                            contributions.
                            Thank you to all of our donors, monthly or one-time, who help ensure that No Older Adult
                            Goes Hungry.</h2>
                    </div>
                    <h1>Frequently Asked
                        <span>Questions</span>
                    </h1>
                    <div class="content-wrapper faq">
                        <div class="faq-container">
                            <button class="accordion">Is this donation tax deductible?</button>
                            <div class="panel">
                                <p>Your contribution is tax deductible to the extent allowed by law. No goods or
                                    services were provided in
                                    return for this gift.
                                    Meals on Wheels Foundation of Northern Illinois is a registered non-profit
                                    organization with Federal Tax
                                    ID 36-4461669.</p>
                            </div>

                            <button class="accordion">Want to make an in-kind donation?</button>
                            <div class="panel">
                                <p>To make an in-kind donation, please review our list of needs on our in-kind donation
                                    page.</p>
                                <div class="button-container">
                                    <a href="other_ways_to_give.html" class="rounded-green-button">In-Kind Donation Page
                                        &#8250;</a>
                                </div>
                            </div>

                            <button class="accordion">How can I volunteer?</button>
                            <div class="panel">
                                <p>To volunteer, please visit our volunteer page to fill out an application.</p>
                                <div class="button-container">
                                    <a href="../about/volunteer.html" class="rounded-green-button">Volunteer &#8250;</a>
                                </div>
                            </div>

                            <button class="accordion">How can I donate through PayPal?</button>
                            <div class="panel">
                                <p>To give through PayPal, scroll to the bottom of this webpage:
                                    https://www.mealsonwheelscentraltexas.org/get-involved/give</p>
                            </div>
                            <button class="accordion">How can I know if my employer will match my donation?</button>
                            <div class="panel">
                                <p>See if your employer will match your donation <b>here!</b></p>
                                <div class="button-container">
                                    <a href="../about/other_ways_to_give.html" class="rounded-green-button">More About
                                        Corporate Giving
                                        &#8250;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="donation-page-donor-support">
                        <h1>Donor Support</h1>
                        <div class="content-wrapper">
                            <div class="donor-support-icons">
                                <img src="../img/samantha-wallace.png" />
                            </div>
                            <p>
                                If you have any additional questions about our donation system, or need further
                                support, please reach out
                                to our Development Manager <a href="mailto:swallace@mowfni.org">Samantha
                                    Wallace</a>.
                            </p>
                            <div class="button-container">
                                <a href="mailto:swallace@mowfni.org" class="rounded-green-button">Send An Email
                                    &#8250;</a>
                            </div>
                        </div>
                    </article>
                </aside>
                    
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
    </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>