<?php get_header(); ?>

<main>
	<!-- page-kv -->
	<div class="c-page-kv c-page-kv--consept">
		<div class="l-container-l">
			<h1 class="c-title-level1 c-title-level1--white">consept</h1>
		</div>
	</div>
	<!-- end page-kv -->

	<!-- consept -->
	<div class="u-ptb">
		<div class="l-container">
			<div class="consept-img">
				<img width="2160" height="540"
					srcset="<?php echo esc_url( get_template_directory_uri() . '/img/pic-consept.jpg' ); ?> 1080w, <?php echo esc_url( get_template_directory_uri() . '/img/pic-consept@2x.jpg' ); ?> 2160w"
					sizes="(max-width: 767px) 90vw, 1080px"
					src="<?php echo esc_url( get_template_directory_uri() . '/img/pic-consept@2x.jpg' ); ?>"
					alt="suppleに関する4枚の写真。1枚目は..." decoding="async" loading="lazy" />
			</div>


			<p class="consept-text u-mt">一杯一杯まごころをこめて調製し、新鮮な香りと豊かな風味のコーヒーを提供します。</p>

			<p class="consept-text02">
				<span>親譲りの無鉄砲で小供の時から損ばかりしている。</span><span>小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</span><span>なぜそんな無闇をしたと聞く人があるかも知れぬ。</span>
			</p>

			<div class="consept-img u-mt">
				<img width="2160" height="540"
					srcset="<?php echo esc_url( get_template_directory_uri() . '/img/pic-consept02.jpg' ); ?> 1080w, <?php echo esc_url( get_template_directory_uri() . '/img/pic-consept02@2x.jpg' ); ?> 2160w"
					sizes="(max-width: 767px) 90vw, 1080px"
					src="<?php echo esc_url( get_template_directory_uri() . '/img/pic-consept02@2x.jpg' ); ?>"
					alt="suppleに関する4枚の写真。1枚目は..." decoding="async" loading="lazy" />
			</div>
		</div>
	</div>
	<!-- end consept -->

	<!-- instagram -->
	<?php get_template_part( 'template/instagram', 'list' ); ?>
	<!-- end instagram -->
</main>

<?php get_footer(); ?>