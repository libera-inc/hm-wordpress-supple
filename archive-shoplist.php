<?php get_header(); ?>

<main>
	<!-- page-kv -->
	<div class="c-page-kv c-page-kv--shoplist">
		<div class="l-container-l">
			<h1 class="c-title-level1 c-title-level1--white">shoplist</h1>
		</div>
	</div>
	<!-- end page-kv -->

	<!-- shoplist -->
	<div class="u-ptb">
		<div class="l-container-l">
			<?php get_template_part( 'template/search', 'form' ); ?>

			<?php if ( have_posts() ) : ?>
			<div class="shoplist-list">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
				<section class="shoplist-item">
					<div class="shoplist-item-img">
						<?php the_post_thumbnail(); ?>
					</div>

					<div class="shoplist-item-info">
						<h2 class="shoplist-item-name"><?php the_title(); ?></h2>

						<p class="shoplist-item-adress"><?php the_field( 'address' ); ?></p>
						<p class="shoplist-item-tel"><?php the_field( 'tel' ); ?></p>

						<ul class="shoplist-item-detail">
							<li class="shoplist-item-detail-item">営業時間／<?php the_field( 'business_hours' ); ?></li>
							<li class="shoplist-item-detail-item">席数／<?php the_field( 'seats' ); ?></li>
							<li class="shoplist-item-detail-item">喫煙／<?php the_field( 'smoking' ); ?></li>
						</ul>
					</div>
				</section>
				<?php endwhile; ?>
			</div>
			<?php else : ?>
			<p class="u-align-center">準備中です</p>
			<?php endif; ?>
		</div>
	</div>
	<!-- end shoplist -->

	<!-- instagram -->
	<?php get_template_part( 'template/instagram', 'list' ); ?>
	<!-- end instagram -->
</main>

<?php get_footer(); ?>