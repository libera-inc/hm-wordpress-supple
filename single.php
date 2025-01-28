<?php get_header(); ?>

<main>
	<!-- page-kv -->
	<div class="c-page-kv c-page-kv--blog">
		<div class="l-container-l">
			<p class="c-title-level1 c-title-level1--white">blog & news</p>
		</div>
	</div>
	<!-- end page-kv -->

	<!-- single -->
	<div class="u-ptb">
		<div class="l-container-s">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
			<article class="single-article">
				<div class="single-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>

				<div class="single-date">
					<time datetime="<?php the_time( 'Y-m-d' ); ?>"
						class="c-date"><?php the_time( get_option( 'date_format' ) ); ?></time>
				</div>

				<h1 class="single-title"><?php the_title(); ?></h1>

				<div class="single-contents">
					<?php the_content(); ?>
				</div>
			</article>
			<?php endwhile; ?>
		</div>
	</div>
	<!-- end single -->

	<!-- instagram -->
	<?php get_template_part( 'template/instagram', 'list' ); ?>
	<!-- end instagram -->
</main>

<?php get_footer(); ?>