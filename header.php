<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sbd</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/style.css">
	<?php wp_head() ?>
</head>

<header class="l-header">
	<div class="p-header">
		<a class="p-header__logo" href="<?php echo esc_url(home_url(('/'))) ?>">
			<img class="p-header__logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_sbd_long.png" alt="SBD-logo">
		</a>

		<nav class="p-header__nav">
			<ul class="p-header__nav__lists">
				<li class="p-header__nav_item"><a href=" <?php echo esc_url(home_url(('/'))) ?>">Top</a></li>
				<li class="p-header__nav_item"><a href=" <?php echo esc_url(home_url(('/about-us'))) ?>">About us</a></li>
				<li class="p-header__nav_item"><a href=" <?php echo esc_url(home_url(('/contact'))) ?>">Contact</a></li>
			</ul>


			<a href=""></a>
		</nav>
	</div>
</header>