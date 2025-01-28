<?php get_header(); ?>

<main>
	<!-- page-kv -->
	<div class="c-page-kv c-page-kv--error">
		<div class="l-container-l">
			<h1 class="c-title-level1 c-title-level1--white">404 error</h1>
		</div>
	</div>
	<!-- end page-kv -->

	<!-- error -->
	<div class="u-ptb">
		<div class="l-container-s">
			<p class="error-text">
				<span>申し訳ございません。お探しのページは見つかりませんでした。</span><span>入力したアドレスが間違っているか、ページが移動・削除された可能性があります。</span>
			</p>

			<div class="u-mt">
				<a href="<?php echo esc_url( home_url() ); ?>" class="c-button c-button--center">top</a>
			</div>
		</div>
	</div>
	<!-- end error -->

	<!-- instagram -->
	<?php get_template_part( 'template/instagram', 'list' ); ?>
	<!-- end instagram -->
</main>

<?php get_footer(); ?>