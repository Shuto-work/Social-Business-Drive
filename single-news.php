<?php get_header(); ?>
<section class="l-section__single">
	<div class="p-single__title-wrap">
		<p class="p-single__date"><?php echo get_the_date('Y.m.d'); ?></p>
		<p class="p-single__title"><?php the_title(); ?></p>
	</div>
	<?php if (has_post_thumbnail()) { ?>
		<div class="p-single__thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>

	<?php } else { ?>
		<figure class="">
			<img class="p-single__thumbnail" decoding="async" src="<?php echo get_template_directory_uri() ?>/assets/images/coming_soon.png" alt="coming_soon">
		</figure>
	<?php } ?>
	<?php echo the_content(); ?>
</section>
<?php get_footer(); ?>