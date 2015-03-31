<?php /* Template Name: Contact Us Template */ get_header(); ?>

<main id="contact" role="main">
            <h1><img src="http://localhost:8080/wp-content/uploads/2015/02/contact.png" alt="contact us"></h1>

<!--==================== contact start =======================-->
        <div class="contact-container">

            <!-- Contact us form information -->
            <div class="col-md-4" id="contact-info">
                <?php
                    $args = array(
                    'post_type'        => 'rw-contact-us',
                    'post_status'      => 'publish',
                    'order'            => 'ASC',
                    'orderby'          => 'date',
                    'posts_per_page'   => 2
                    );

                    $loop = new WP_Query($args);
                        $loopItr = 0;
                        if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
                        ?>

                <div class="contactadd">
                    <h3><?php echo types_render_field('rw-location', array('output' => 'HTML')); ?></h3>
                    <?php echo types_render_field('rw-address', array('output' => 'HTML', 'separator' => '<br />')); ?>
                </div><!-- closing div--><br />

                    <?php $loopItr++; endwhile; endif; ?>

                    <p><a href="mailto:info@redwavecomm.com">info@redwavecomm.com</a></p>
            </div>
            <div class="col-md-19">
                <div class="col-md-10 contactForm">
                    <?php echo do_shortcode('[ninja_forms_display_form id=2]'); ?>
                </div><!-- ninja form -->
                <div class="col-md-11"></div>

        </div><!-- form container -->

    </div><!-- overall container -->
    <!--============================== contact us end code ===============================-->

    </main>

<?php get_footer(); ?>