<footer class="l-footer">
	<div class="p-footer">
		<img class="p-footer__img" src="<?php echo get_template_directory_uri() ?>/assets/images/logo_sbd_with_text.png" alt="">
		<ul class="p-footer__list">
			<li class="p-footer__item"><a href=" <?php echo esc_url(home_url(('/'))) ?>">Top</a></li>
			<!-- <li class="p-footer__item"><a href=" <?php echo esc_url(home_url(('/about-us'))) ?>">About us</a></li> -->
			<li class="p-footer__item"><a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">Blog</a></li>
			<li class=" p-footer__item"><a href=" <?php echo esc_url(home_url(('/contact'))) ?>">Contact</a></li>
			<!-- <li class="p-footer__item">
				<a href="<?php echo esc_html('https://note.com/yakuwa134/') ?>" target="_blank" rel="noopener noreferrer">note</a>
			</li> -->
		</ul>
	</div>
	<p class="p-footer__privacy">© 2021 Social Business Drive All rights reserved.</p>
</footer>
<?php wp_footer(); ?>