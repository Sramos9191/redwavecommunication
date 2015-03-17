<?php /* Template Name: About Us Template */ get_header(); ?>

    <main role="main">

        <?php
            $args = array(
            'pagename'        => 'about-us',
            'post_status'      => 'publish',
            );
                $loop = new WP_Query($args);
                if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
        ?>
        <!--==================== about section start ======================-->
        <div class="about-countainer">
            <div class="col-md-24 about-top" alt="about redwave communications">
                <div class="col-md-14 pull-left"></div>
                <div class="col-md-10 pull-right">
                    <p id="about"><?php echo types_render_field('about-company', array('output' => 'HTML')); ?></p>
                </div>
            </div><!--about image with description-->
            <div class="col-md-24 about-bottom">
                <div id="cert" class="col-md-14">
                    <?php echo the_content(); ?>
                </div>
                <div id="cert" class="col-md-10">
                    <h4><strong><span class="red">CERTIFICATIONS</span></strong></h4>
                    <?php echo types_render_field('about-certifications', array('output' => 'HTML'));  ?>

                </div>
            </div>
        </div>

            <!--==============about us section========================-->
        <?php endwhile; endif; ?>
    </main>

<?php get_footer(); ?>