<?php get_header(); ?>

<main>
	<!-- page-kv -->
	<div class="c-page-kv c-page-kv--blog">
		<div class="l-container-l">
			<h1 class="c-title-level1 c-title-level1--white">blog & news</h1>
		</div>
	</div>
	<!-- end page-kv -->

	<!-- blog -->
	<div class="u-ptb">
		<div class="l-container">
			<?php if ( have_posts() ) : ?>
			<div class="c-posts c-posts--col3">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
				<article class="c-post">
					<a href="<?php the_permalink(); ?>" class="c-post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</a>
					<div class="c-post-date">
						<time datetime="<?php the_time( 'Y-m-d' ); ?>"
							class="c-date"><?php the_time( get_option( 'date_format' ) ); ?></time>
					</div>
					<h2 class="c-post-ttl">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
				</article>
				<?php endwhile; ?>
			</div>

			<!-- pagination -->
			<?php
				global $wp_query;
				if ( $wp_query->max_num_pages > 1 ) :
					?>
			<div class="c-pagination">
				<?php
					$args = array(
						'mid_size'           => 1,
						'prev_text'          => '',
						'next_text'          => '',
						'screen_reader_text' => 'ページネーション',
					);
					the_posts_pagination( $args );
					?>
			</div>
			<?php endif; ?>
			<!-- end pagination -->
			<?php else : ?>
			<p class="u-align-center">まだ投稿がありません</p>
			<?php endif; ?>
		</div>
	</div>
	<!-- end blog -->

	<!-- instagram -->
	<?php get_template_part( 'template/instagram', 'list' ); ?>
	<!-- end instagram -->
</main>

<?php get_footer(); ?>