<?php /* Template Name: Home Page */ get_header(); ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" id="left">
			<h4>residential<br>
			solutions</h4>
			
			<?php $query = rw_homepage_residential_links(); ?>
			<ul>
				<?php if ($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
				<li><?php the_title(); ?>></li>
				<? endwhile; endif; ?>
			</ul>

		</div><!-- left side column -->
		<div class="col-md-12" id="right">
			<h4>business<br>
			solutions</h4>

			<?php $query = rw_homepage_business_links(); ?>
			<ul>
				<?php if ($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
				<li><?php the_title(); ?>></li>
				<? endwhile; endif; ?>
			</ul>
		</div><!-- right side column -->
		<div id="getestimate">
			<a href="http://localhost:8080/?page_id=18">Get an Estimate.</a>
		</div>
	</div><!-- .row -->
	
	
	<div class="row">
		<div class="col-md-24">
			<?php get_footer(); ?>
		</div><!-- close col-md-24 -->
	</div><!-- close row -->
</div><!-- container -->
