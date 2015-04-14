<?php /* Template Name: Systmes Template */ get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-1 col-md-7 col-sm-24 col-xs-24">
            <h1>    
                <img src="/wp-content/uploads/2015/02/systems2.png" alt="business systems">
            </h1>
            <div class="row">
            <a class="pull-right" id="residentialSys" href="/residential/#accordionPro214-slide-5">View Residential Systems</a>
            </div>
            <div class="row">
                <p class="headpad">
                    We partner with leading
                    technology manufacturers to
                    customize the right solution
                    or residential or business
                    projects.
                </p>

            </div><!-- close row -->
        </div><!-- close .pull-left col-md-12 -->
        <div class="col-md-13 all-systems">
        <?php
            $args = array(
                'post_type'        => 'rw-system',
                'post_status'      => 'publish',
                'order'            => 'ASC',
                'orderby'          => 'title',
            );

            $loop = new WP_Query($args);
            
            if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post(); 
        ?>
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );?>
        <div class="system">      
            <div class="image" style="background:url('<?php echo $src[0]; ?>') center no-repeat; background-size: cover;">

                    <div class="infocontainer">
                        <img id="tool-tip" src="<?php echo get_template_directory_uri() ?>/img/tool-tip.png" />
                        <div class="col-xs-14 sys-desc">
                            <p>
                                <?php echo types_render_field('system-description',
                                    array('output'=>'html')); ?>
                            </p>
                        </div><!-- end of description for infobox -->
                        <div class="col-xs-10 infolist">
                            <h5><strong>BRANDS</strong></h5>
                            <ul class="bulletlist">
                                <li>
                                    <?php
                                        echo types_render_field('system-list',
                                            array('output' => 'html', 'separator' => '</li><li>'));
                                    ?>
                                </li>
                            </ul>
                        </div><!-- end of bulletlist in infolist-->
                    </div><!-- end of the info container -->
            </div>
        </div><!-- close info container -->
        <?php 
            endwhile; endif;
        ?>
        </div>
    </div>
    <!-- finally close the current row -->
    </div>
        
    <div class="row">
        <div class="col-md-24">
            <?php get_footer(); ?>
        </div>
    </div><!-- close row -->
</div><!-- close the beginning containers  -->
