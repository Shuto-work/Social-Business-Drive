<?php
$args = array(
	'post_type' => 'news',
	'posts_per_page' => 9
);
$wp_query = new WP_Query($args);
?>

<?php get_header(); ?>

<body>
	<section class="l-fv rellax" data-rellax-speed="-1">
		<h2 class="p-fv__title rellax fadein" data-rellax-speed="2">ソーシャルビジネスに<br>
			顧客起点・データドリブンの<br class="display-sp">マーケティングを
		</h2>
	</section>
	<section class="l-section">
		<div class="c-section__title__wrap">
			<h2 class="c-section__title-en">What's SBD</h2>
			<p class="c-section__title-ja">ソーシャルビジネスドライブについて</p>
		</div>
		<div class="c-text__box">
			<div class="p-fv__message-container">
				<div class="p-fv__message-wrap">
					<p class="c-text">
						これまで、私たちは大小さまざまな新規事業立ち上げに携わり、その経験から「社会へのインパクトを見据えたビジネス」を増やす重要性を実感しています。<br class="display-sp"><br class="display-sp">しかし、事業を加速させるためには多くの課題があり、多くの起業家がマーケティングの十分な知識や経験を持っているとは限りません。私たちは起業家や事業への共感を軸に、マーケティング支援を通じてソーシャルビジネスの可能性を広げます。</p>
					<p class="c-text"><strong> ところで、「ソーシャルビジネス」と「ビジネス」は何が違うのでしょうか？</strong></p>
					<p class="c-text">私たちの答えは明快です。</p>
					<button class="p-fv__message__more-btn">続きを読む</button>
				</div>
			</div>
			<div class="p-fv__message__next">
				<p class="c-text">ビジネス本来の在り方は、社会性と経済性を統合すること。しかし、多くの企業が経済性を優先するあまり、働く人々の思考は「目標達成」や「社内の忖度」に終始し、事業・サービス、社会のあるべき姿を議論しなくなっています。</p>
				<p class="c-text">この結果、社会の断絶や孤立といった問題が放置されてきました。
					私たちが考えるソーシャルビジネスとは、こうした社会問題を放置せず、自己責任の名の下で見て見ぬふりをせず、ビジネスの力で社会をつなぎ直すことです。社会が物質的には豊かさを増す一方で、未だ残る生きづらさや問題に向き合い、持続可能な未来を創るために、SBDは生まれました。</p>
				<button class="p-fv__message__more-btn">閉じる</button>
			</div>

	</section>
	<section class="l-section ">
		<div class="c-section__title__wrap">
			<h2 class="c-section__title-en">News</h2>
			<p class="c-section__title-ja">最新情報</p>
		</div>
		<article class="p-articleGallery">
			<ul class="p-articleGallery__list">
				<?php
				if ($wp_query->have_posts()) {
					while ($wp_query->have_posts()) {
						$wp_query->the_post(); ?>
						<li class="p-articleGallery__item">
							<a class="p-articleGallery__link" href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) { ?>
									<div class="p-articleGallery__image">
										<?php the_post_thumbnail('medium'); ?>
									</div>
								<?php } else { ?>
									<figure class="p-articleGallery__image">
										<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/images/coming_soon.png" alt="coming_soon">
									</figure>
								<?php } ?>
								<div class="p-articleGallery__text-box">
									<p class="p-articleGallery__date"><?php echo get_the_date('Y,m,d'); ?></p>
									<p class="p-articleGallery__title"><?php the_title(); ?></p>
								</div>
							</a>
						</li>
				<?php }
					wp_reset_postdata(); // 投稿データのリセット
				} else {
					echo '<p>記事がありません</p>';
				}
				?>
			</ul>
		</article>
	</section>
	<section class="l-section ">
		<div class="c-section__title__wrap">
			<h2 class="c-section__title-en">Business</h2>
			<p class="c-section__title-ja">事業紹介</p>
		</div>
		<p class="p-business__text">
			スタートアップ期からのマーケティングをバックアップ。<br>
			様々な手法の支援だけでなく、それらを支える構造（オペレーションやシステム）を作る所からも伴走支援します。
		</p>
		<ul class="p-business__list">
			<li class="p-business__item">
				<h3 class="p-business__title">マーケティング戦略支援</h3>
				<img decoding="async" loading="lazy" class="p-business__img" src="<?php echo get_template_directory_uri() ?>/assets/images/marketing_support.jpg" alt="マーケティング戦略支援">
				<div class="p-business__text-box">
					<p class="p-business__description">市場分析、ターゲットセグメントの選定、ペルソナ分析など、事業戦略〜マーケティングまでサポート。
						イシューから始まる戦略だからこそ、事業戦略とマーケティング戦略が連動し、その会社ならではの、ストーリーのある差別化された戦略に仕上がります。
					</p>
				</div>
			</li>
			<li class="p-business__item">
				<h3 class="p-business__title">マーケティング施策支援</h3>
				<img decoding="async" loading="lazy" class="p-business__img" src="<?php echo get_template_directory_uri() ?>/assets/images/marketing_plan.jpg" alt="マーケティング施策支援">
				<div class="p-business__text-box">
					<p class="p-business__description"> Webマーケティング、コンテンツマーケティング、メールマーケティング、SEO、Web解析、ウェビナー企画、オンライン広告、イベントマーケティングなど、幅広くサポートすることが可能です。
						どれも重要な施策になることが多いですが、「顧客起点」で考え、「データ」でアイディアを加速させることを重視しています。
					</p>
				</div>
			</li>
			<li class="p-business__item">
				<h3 class="p-business__title">新規事業開発・営業サポート</h3>
				<img decoding="async" loading="lazy" class="p-business__img" src="<?php echo get_template_directory_uri() ?>/assets/images/business_dev.jpg" alt="新規事業開発・営業サポート">
				<div class="p-business__text-box">
					<p class="p-business__description">営業の計画策定〜トークスクリプト作成まで、幅広く支援。営業を平準化・標準化し、システム化することで成果を最大化することを目指します。</p>
				</div>
			</li>
		</ul>
	</section>
	<section class="l-section ">
		<div class="c-section__title__wrap">
			<h2 class="c-section__title-en">Member</h2>
			<p class="c-section__title-ja">メンバー紹介</p>
		</div>
		<div class="p-member__container">
			<img decoding="async" loading="lazy" class="p-member__img" src="<?php echo get_template_directory_uri() ?>/assets/images/yakuwa_monochrome.jpg" alt="八鍬">
			<div class="p-member__text-wrap">
				<h3 class="p-member__title">ソーシャルビジネスドライブ 代表</h3>
				<h3 class="p-member__title">八鍬 慶行（Yoshiyuki Yakuwa）
				</h3>
				<p class="p-member__text">株式会社ゼネラルパートナーズにて、法人営業および新規事業企画室のマネージャーとして複数の新規事業をリード。その後、ソフトバンク株式会社でB2Bマーケティングに従事し、複数商材の戦略立案から実行・改善までを一貫して担当。Webマーケティング、コンテンツマーケティング、メールマーケティング、SEO、ウェビナー企画、オンライン広告、イベントマーケティングなど、多岐にわたる施策を主導。
					2020年に、起業家が抱く「ビジネスで社会を良くしたい」という想いをマーケティングで加速することを目的に、ソーシャルビジネスドライブ（SBD） を設立。現在は、マーケティングの視点から事業の成長を支援しています。
				</p>
			</div>
		</div>
	</section>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/rellax.min.js" defer></script>
<?php get_footer(); ?>