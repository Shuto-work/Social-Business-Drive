<?php get_header(); ?>
<section class="l-section__contact">
	<div class="p-form__confirm-wrap">
		<h1 class="p-form__confirm-title">送信確認</h1>
		<p class="p-form__confirm-text">この内容で送信します</p>
	</div>
	<div class="p-form">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile;
		endif; ?>
	</div>
</section>
<?php get_footer(); ?>