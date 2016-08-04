<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <section class="section">
  	<div class="section__wrapper">
  		<div class="section__content">
  			<p>
  				<?php _e('Sorry, no results were found.', 'sage'); ?>
  			</p>
			<?php get_search_form(); ?>
  		</div>
  	</div>
  </section>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
