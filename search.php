<?php use Roots\Sage\Titles; ?>
<?php get_template_part('templates/page', 'header'); ?>

<section class="section">
	<div class="section__wrapper">
		<div class="section__content">
			<h2><?= Titles\title(); ?></h2>	
			<?php if (!have_posts()) : ?>
				<p><?php _e('Sorry, no results were found.', 'sage'); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
