<?php use Roots\Sage\Titles; ?>

<section class="section">
	<div class="section__wrapper">
		<div class="section__content">
			<h2><?= Titles\title(); ?></h2>
			<?php the_content(); ?>
			<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>	
		</div>
	</div>
</section>