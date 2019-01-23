<header class="section header">
	<div class="section__wrapper">
		<div class="section__content">
			<h1 class="header__logo logo logo--hero">
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
	<?php if (!is_page()): ?>
	<section class="section">
		<div class="section__wrapper">
			<div class="section__content">
				<h2>Configuration problems!</h2>
				<p>
					<strong>Error</strong>: This site expects a static homepage.
				</p>
				<p>If you are just trying to read this site, this is not your fault.</p>
				<p>
					This is a configuration error; this site is not configured properly to use
					the ACAC theme.
				</p>
				<p>
					Admins: you need to set up a static homepage.
				</p>
				<p>To do this:</p>
				<ol>
					<li>Log in.</li>
					<li>Settings &gt; Reading</li>
					<li>Set <strong>Front Page Displays</strong> to <strong>a static page</strong>.</li>
					<li>Choose a page to be the "front" page and a page to be the "posts" page.</li>
					<li>Click <strong>Save Changes</strong>.</li>
				</ol>
			</div>
		</div>
	</section>
	<?php else: ?>
		<?php $sections = get_post_meta(get_the_id(), '_acac_section_group', true); ?>
		<?php if (!$sections || !array_key_exists('title', $sections[0])): ?>
		<div class="section__wrapper">
			<div class="section__content">
				<h2>Configuration problems!</h2>
				<p>
					<strong>Error</strong>: The homepage needs <em>sections</em> of content.
				</p>
				<p>If you are just trying to read this site, this is not your fault.</p>
				<p>
					This is a configuration error; this site is not configured properly to use
					the ACAC theme.
				</p>
				<p>
					Admins: you need to add <em>sections</em> to the front page.
					Regular content will not work.
				</p>
				<p>To do this:</p>
				<ol>
					<li>Log in.</li>
					<li>Begin editing the front page.</li>
					<li><em>Below</em> the main "content" editor, there is a box entitled <strong>Homepage sections</strong>. Add as many as you want.</li>
					<li>Click <strong>Update</strong> on the right.</li>
				</ol>
			</div>
		</div>
		<?php else: ?>
			<?php foreach ($sections as $key => $section): ?>
				<section class="section <?php echo ($section['dark']) ? 'section--dark' : ''; ?>">
				<div class="section__wrapper">
					<div class="section__content">
						<h2><?php echo $section['title']; ?></h2>
						<?php echo wpautop($section['content']); ?>
					</div>
				</div>
			</section>
			<?php endforeach; ?>
		<?php endif; ?>
	<?php endif; ?>
<?php endwhile; ?>