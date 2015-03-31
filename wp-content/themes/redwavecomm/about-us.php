<?php /* Template Name: About Us Template */ get_header(); ?>
<div class="countainer-fluid">
    <div class="row">
        <div class="col-md-24">
            <div class="about-top">
                <div class="col-md-12 pull-left">
                    <h3 class="bottomexpand">about redwave communications</h3>
                </div>
                <?php
                        $args = array(
                        'pagename'        => 'about-us',
                        'post_status'      => 'publish',
                        );

                        $loop = new WP_Query($args);
                        if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
                ?>
                <div class="col-md-12 pull-right">
                    <p id="about">
                        <?php echo types_render_field ('top-left', array('output' => 'HTML')); ?>
                    </p>
                </div><!-- .col-md-12 .pull-right -->
            </div><!-- close about-top -->
        </div>
    </div><!-- .row -->
    <div class="row">
        <div class="col-md-14">
            <div class="about-bottom">
                <?php the_content(); ?>
            </div><!-- close about-bottom -->
        </div><!-- close col-md-14 -->
        <div class="col-md-10">
            <?php echo types_render_field('certification', array('output' => 'HTML')); ?>
        </div><!-- close col-md-10 -->
    </div><!-- close row -->
         <?php endwhile; endif; ?>
    <div class="row">
        <div class="col-md-24">
            <?php get_footer(); ?>
        </div>
    </div>
</div>