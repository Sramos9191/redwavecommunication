<?php get_header(); ?>
		<!-- section -->
				<?php $query = rw_homepage_residential_links(); ?>

			<!--==================== main content start =======================-->

			<div class="col-md-24" id="mainPage">
					<div class="col-md-12" id="left">
						<h4 class="red">residential<br />solutions</h4>


						<ul>
							<?php if ($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
							<li><a href="<?php echo types_render_field('link', array('output' => 'raw')); ?>"><?php the_title(); ?> ></a></li>
							<?php endwhile; endif; ?>
						</ul>
					</div><!-- left side column -->

				<?php $query = rw_homepage_business_links(); ?>
					<div class="col-md-12" id="right">
						<h4 class="red">business<br /> solutions</h4>

						<ul>
							<?php if ($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
							<li><a href="<?php echo types_render_field('link', array('output' => 'raw')); ?>"><?php the_title(); ?> ></a></li>
							<?php endwhile; endif; ?>
						</ul>
					</div><!-- right side column -->
					<div id="getestimate">
						<p><a href="contact-us" target="_self">Get an Estimate</a></p>
					</div>
			</div>

			<!--=================main content end ==========================-->
		<!-- /section -->


<?php get_footer(); ?>
