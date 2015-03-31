<?php /* Template Name: Contact Us Template */ get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-1 col-md-offset-23">    
            <h1>
                <img src="http://localhost:8080/wp-content/uploads/2015/03/contact.png" alt="contact">
            </h1>
        </div>
    </div>
        <?php
            $args = array(
            'pagename'        => 'contact',
            'post_status'      => 'publish',
            );

            $loop = new WP_Query($args);
            if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
        ?>
    <div class="row">
        <div class="col-md-offset-1 col-md-5">
            <?php the_content(); ?>
        </div>
        <div class="col-md-offset-1 col-md-5">
            <p>
                <?php echo types_render_field ('contact-form', array('output' => 'HTML')); ?>
            </p>
        </div><!-- .col-md-12 .pull-right -->
    </div>

    <div class="row">
        <div class="col-md-24">
            <?php get_footer(); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>