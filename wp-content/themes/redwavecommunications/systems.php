<?php /* Template Name: Systmes Template */ get_header(); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-sm-24 col-xs-24">
            <div class="grid-system">
                <img class="grid-header" src="http://localhost:8080/wp-content/uploads/2015/02/systems2.png">

                <p class="headpad">
                    We partner with leading
                    technology manufacturers to
                    customize the right solution
                    or residential or business
                    projects.</p>
            </div><!-- close .grid-system -->
        </div>

        <?php
        $args = array(
            'post_type'        => 'rw-system',
            'post_status'      => 'publish',
            'order'            => 'ASC',
            'orderby'          => 'title',
            'posts_per_page'   => -1
        );
        $loop = new WP_Query($args);
        $cols = 2;
        if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
        ?>

        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 200,150 ), false, '' );?>

        <div class="<?php echo ($cols == 1) ? 'col-md-offset-4' : '' ?> col-md-4 col-sm-24 col-xs-24">
            <div class="grid-system">
                <div class="image" style="background:url('<?php echo $src[0]; ?>'); background-size: 196px 156px;"></div>

                <div class="infocontainer infolist">
                    <img id="tool-tip" src="<?php echo get_template_directory_uri() ?>/img/tool-tip.png" />
                    <div class="sys-desc col-md-14">
                        <p><?php echo types_render_field('system-description', array('output'=>'html')); ?></p>
                    </div><!-- close .col-md-14 -->
                    <div class="col-md-10">
                        <h5><strong>BRANDS</strong></h5>
                        <ul class="bulletlist">
                            <li>
                                <?php
                                echo types_render_field('system-list', array('output' => 'html', 'separator' => '</li><li>'));
                                ?>
                            </li>
                        </ul>
                    </div> <!-- close .col-md-10 -->
                </div> <!-- close info container -->
            </div><!-- close grid-system-->
        </div><!-- close .col-md-offset-2 -->

        <?php if ($cols === 4): ?>

        <!-- close the current row -->
    </div>

    <!-- open a new row -->
    <div class="row">
        <?php $cols=0; endif; ?>
        <?php $cols++; endwhile; endif; ?>
        <!-- finally close the current row -->
    </div>

    <div class="row">
        <div class="col-md-24">
            <?php get_footer(); ?>
        </div>
    </div>
</div><!-- close the beginning containers  -->
