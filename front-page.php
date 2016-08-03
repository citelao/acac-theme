<header class="section header">
	<div class="section__wrapper">
		<div class="section__content">
			<h1 class="header__logo logo">
				<a href="/" class="logo__link" title="self-link to ACAC homepage">
					<img class="logo__image" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="the ACAC logo">
				</a>
			</h1>
			
			<hgroup class="tagline">
				<h2 class="tagline__intro">a cappella is big at WUSTL.</h2>
				<h2 class="tagline__emphasis">ACAC coordinates it.</h2>
			</hgroup>
		</div>
	</div>
</header>

<?php while (have_posts()) : the_post(); ?>
  <?php foreach (get_post_meta(get_the_id(), '_acac_section_group', true) as $key => $section): ?>
  	<section class="section <?php echo ($section['dark']) ? 'section--dark' : ''; ?>">
		<div class="section__wrapper">
			<div class="section__content">
				<h2><?php echo $section['title']; ?></h2>
				<?php echo wpautop($section['content']); ?>
			</div>
		</div>
	</section>
  <?php endforeach; ?>
<?php endwhile; ?>