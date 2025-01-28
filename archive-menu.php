<?php get_header(); ?>

<main>
	<!-- page-kv -->
	<div class="c-page-kv c-page-kv--menu">
		<div class="l-container-l">
			<h1 class="c-title-level1 c-title-level1--white">menu</h1>
		</div>
	</div>
	<!-- end page-kv -->

	<!-- menu -->
	<div class="u-ptb">
		<div class="l-container-s">
			<p class="menu-head-text">使用しているコーヒー豆を紹介します</p>
			<p class="menu-head-text02"><span>SUPPLEでは上質なコーヒー豆を</span><span>世界中から直接輸入しています。</span></p>

			<div class="u-mt menu-block-wrap">
				<div class="menu-block">
					<h2 class="menu-title">drip</h2>

					<div class="menu-list">
						<?php
							$args = array(
								'post_type'      => 'menu',
								'posts_per_page' => -1,
								'tax_query'      => array(
									array(
										'taxonomy'         => 'extraction-method',
										'field'            => 'slug',
										'terms'            => array( 'drip' ),
										'include_children' => true,
										'operator'         => 'IN',
									),
								),
							);
							$menu = new WP_Query( $args );
							if ( $menu->have_posts() ) :
								?>
								<?php
								while ( $menu->have_posts() ) :
									$menu->the_post();
									?>
						<section class="menu-item">
							<div class="menu-item-img">
									<?php the_post_thumbnail(); ?>
							</div>

							<div class="menu-item-info">
								<h3 class="menu-item-name"><?php the_title(); ?></h3>
								<p class="menu-item-price">¥<?php the_field( 'price' ); ?></p>
								<p class="menu-item-description">
									<?php the_field( 'description' ); ?>
								</p>
							</div>
						</section>
						<?php endwhile; ?>
						<?php else : ?>
						<p class="u-align-center">準備中です</p>
							<?php
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>

				<div class="menu-block">
					<h2 class="menu-title">espresso</h2>

					<div class="menu-list">
						<?php
							$args = array(
								'post_type'      => 'menu',
								'posts_per_page' => -1,
								'tax_query'      => array(
									array(
										'taxonomy'         => 'extraction-method',
										'field'            => 'slug',
										'terms'            => array( 'espresso' ),
										'include_children' => true,
										'operator'         => 'IN',
									),
								),
							);
							$menu = new WP_Query( $args );
							if ( $menu->have_posts() ) :
								?>
								<?php
								while ( $menu->have_posts() ) :
									$menu->the_post();
									?>
						<section class="menu-item">
							<div class="menu-item-img">
									<?php the_post_thumbnail(); ?>
							</div>

							<div class="menu-item-info">
								<h3 class="menu-item-name"><?php the_title(); ?></h3>
								<p class="menu-item-price">¥<?php the_field( 'price' ); ?></p>
								<p class="menu-item-description">
									<?php the_field( 'description' ); ?>
								</p>
							</div>
						</section>
						<?php endwhile; ?>
						<?php else : ?>
						<p class="u-align-center">準備中です</p>
							<?php
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end menu -->

	<!-- instagram -->
	<?php get_template_part( 'template/instagram', 'list' ); ?>
	<!-- end instagram -->
</main>

<?php get_footer(); ?>