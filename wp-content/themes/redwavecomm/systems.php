<?php /* Template Name: Systmes Template */ get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-1 col-md-7 col-sm-24 col-xs-24">
            <h1>    
                <img src="http://localhost:8080/wp-content/uploads/2015/03/systems1.png" alt="systems">
            </h1>
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
                <div class="infocontainer infolist">
                    <img id="tool-tip" src="<?php echo get_template_directory_uri() ?>/img/tool-tip.png" />
                    <p>
                        <?php echo types_render_field('system-description', 
                            array('output'=>'html')); ?>
                    </p>
                    <h5><strong>BRANDS</strong></h5>
                    <ul class="bulletlist">
                        <li>                                
                            <?php
                                echo types_render_field('system-list', 
                                    array('output' => 'html', 'separator' => '</li><li>'));
                            ?>
                        </li>
                    </ul>
                </div> 
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