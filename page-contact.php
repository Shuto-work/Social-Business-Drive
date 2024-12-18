<?php get_header(); ?>
<section class="l-section">
	<div class="c-section__title__wrap">
		<h2 class="c-section__title-en">Contact</h2>
		<p class="c-section__title-ja">お問い合わせ</p>
	</div>
	<div class="p-form">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile;
		endif; ?>
	</div>
</section>
<?php get_footer(); ?>