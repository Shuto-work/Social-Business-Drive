<?php
$paged = max(1, get_query_var('paged'));
$args = array(
	'post_type' => 'news',
	'posts_per_page' => 9,
	'paged' => $paged
);
$custom_query = new WP_Query($args);

?>

<?php get_header(); ?>
<section class="l-section">
	<div class="c-inner">
		<div class="c-section__title__wrap">
			<h2 class="c-section__title-en">News</h2>
			<p class="c-section__title-ja">最新情報</p>
		</div>
		<article class="p-articleGallery">
			<ul class="p-articleGallery__list">
				<?php
				if ($custom_query->have_posts()) {
					while ($custom_query->have_posts()) {
						$custom_query->the_post(); ?>
						<li class="p-articleGallery__item">
							<a class="p-articleGallery__link" href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) { ?>
									<div class="p-articleGallery__image">
										<?php the_post_thumbnail('medium'); ?>
									</div>
								<?php } else { ?>
									<figure class="p-articleGallery__image">
										<img decoding="async" src="<?php echo get_template_directory_uri() ?>/assets/images/coming_soon.png" alt="coming_soon">
									</figure>
								<?php } ?>
								<div class="p-articleGallery__text-box">
									<p class="p-articleGallery__date"><?php echo get_the_date('Y,m,d'); ?></p>
									<p class="p-articleGallery__title"><?php the_title(); ?></p>
								</div>
							</a>
						</li>
				<?php }
				} else {
					echo '<p>記事がありません</p>';
				}
				?>
			</ul>
			<div class="p-articleGallery__pageNation">
				<?php // ページネーションを表示
				$total_pages = $custom_query->max_num_pages;
				if ($total_pages > 1) {
					$current_page = max(1, get_query_var('paged'));
					echo paginate_links(array(
						'base' => get_pagenum_link(1) . '%_%',
						'format' => 'page/%#%/',
						'current' => $current_page,
						'total' => $total_pages,
						'prev_text' => '前へ',
						'next_text' => '次へ',
						'end_size'  => 1,   // 最初と最後に表示するページ数
						'mid_size'  => 1    // 現在ページの前後に表示するページ数
					));
				}
				// 投稿データをリセット
				wp_reset_postdata(); ?>
			</div>
		</article>
	</div>
</section>
<?php get_footer(); ?>