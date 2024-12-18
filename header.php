<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sbd</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/style.css">
	<meta name="google-site-verification" content="ADXOazl2yoHqLtAHyjpyw8M0Ubw5UxMYa7JGhjUHyI4" />
	<?php wp_head() ?>
</head>

<header class="l-header">
	<div class="p-header">
		<a class="p-header__logo" href="<?php echo esc_url(home_url(('/'))) ?>">
			<img class="p-header__logo__img display-pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_sbd_long.png" alt="SBD-logo">
			<img class="p-header__logo__img display-sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_SBD_SP.png" alt="SBD-logo">
		</a>
		<!-- PC版ナビ -->
		<nav class="p-header__nav display-pc">
			<ul class="p-header__nav__lists">
				<li><a class="p-header__nav_item" href=" <?php echo esc_url(home_url(('/'))) ?>">Top</a></li>
				<li><a class="p-header__nav_item" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">Blog</a></li>
				<li><a class="p-header__nav_item" href=" <?php echo esc_url(home_url(('/contact'))) ?>">Contact</a></li>
			</ul>
		</nav>
		<!-- SP版ナビ -->
		<button class="p-hamburger display-sp" id="hamburger-button">
			<span class="p-hamburger__line1"></span>
			<span class="p-hamburger__line2"></span>
		</button>
	</div>
	<nav class="p-header__nav-sp l-section__contact__header-sp">
		<ul class="p-header__nav__lists-sp">
			<li class="p-header__nav__item-sp"><a class="p-header__nav_link-sp" href=" <?php echo esc_url(home_url(('/'))) ?>">Top</a></li>
			<li class="p-header__nav__item-sp"><a class="p-header__nav_link-sp" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">Blog</a></li>
			<li class="p-header__nav__item-sp"><a class="p-header__nav_link-sp" href=" <?php echo esc_url(home_url(('/contact'))) ?>">Contact</a></li>
		</ul>
	</nav>
</header>