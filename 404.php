<?php use Roots\Sage\Titles; ?>
<?php get_template_part('templates/page', 'header'); ?>

<section class="section">
	<div class="section__wrapper">
		<div class="section__content">
			<h2><?= Titles\title(); ?></h2>
			<p><?php _e('Sorry, the page you were looking for was not found.', 'sage'); ?></p>
			<p><?php _e('Try searching?', 'sage'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</section>