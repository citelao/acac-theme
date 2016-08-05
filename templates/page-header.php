<header class="section">
	<h1 class="header__logo logo">
		<a href="/" class="logo__link">
			<img class="logo__image" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="the ACAC logo">
		</a>
	</h1>
	<?php
	if (has_nav_menu('primary_navigation')) :
	wp_nav_menu([
		'theme_location' => 'primary_navigation',
		'container' => 'nav',
		'container_class' => 'navigation',
		'menu_class' => 'navigation__list',
	]);
	endif;
	?>
</header>