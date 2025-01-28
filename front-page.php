<?php get_header(); ?>

<main>
	<!-- top-kv -->
	<div class="top-kv"></div>
	<!-- end top-kv -->

	<!-- top-consept -->
	<section class="top-consept u-ptb">
		<div class="l-container-s">
			<h2 class="c-title-level2 c-title-level2--center">consept</h2>

			<div class="u-mt">
				<div class="top-consept-img">
					<img width="1920" height="954"
						srcset="<?php echo esc_url( get_template_directory_uri() . '/img/pic-top-consept.jpg' ); ?> 960w, <?php echo esc_url( get_template_directory_uri() . '/img/pic-top-consept@2x.jpg' ); ?> 1920w"
						sizes="(max-width: 767px) 90vw, 960px"
						src="<?php echo esc_url( get_template_directory_uri() . '/img/pic-top-consept@2x.jpg' ); ?>"
						alt="" decoding="async" loading="lazy" />
				</div>

				<p class="top-consept-text u-mt">一杯一杯まごころをこめて調製し、新鮮な香りと豊かな 風味のコーヒーを提供します。</p>

				<p class="top-consept-text02">
					<span>親譲りの無鉄砲で小供の時から損ばかりしている。</span><span>小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</span><span>なぜそんな無闇をしたと聞く人があるかも知れぬ。</span>
				</p>

				<div class="u-mt">
					<a href="<?php echo esc_url( home_url( '/consept/' ) ); ?>"
						class="c-button c-button--center">more</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end top-consept -->

	<!-- top-menu -->
	<section class="top-menu u-ptb">
		<div class="l-container">
			<div class="top-menu-inner">
				<h2 class="c-title-level2 c-title-level2--white c-title-level2--center">menu</h2>

				<div class="top-menu-body u-mt">
					<section class="top-menu-block">
						<h3 class="top-menu-list-title">drip</h3>
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
						<ul class="top-menu-list">
								<?php
								while ( $menu->have_posts() ) :
									$menu->the_post();
									?>
							<li class="top-menu-item">
								<span class="top-menu-item-name"><?php the_title(); ?></span>
								<span class="top-menu-item-price">¥<?php the_field( 'price' ); ?></span>
							</li>
							<?php endwhile; ?>
						</ul>
						<?php else : ?>
						<p class="u-align-center u-color-white">準備中です</p>
							<?php
						endif;
						wp_reset_postdata();
						?>
					</section>

					<section class="top-menu-block">
						<h3 class="top-menu-list-title">espresso</h3>

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
						<ul class="top-menu-list">
								<?php
								while ( $menu->have_posts() ) :
									$menu->the_post();
									?>
							<li class="top-menu-item">
								<span class="top-menu-item-name"><?php the_title(); ?></span>
								<span class="top-menu-item-price">¥<?php the_field( 'price' ); ?></span>
							</li>
							<?php endwhile; ?>
						</ul>
						<?php else : ?>
						<p class="u-align-center u-color-white">準備中です</p>
							<?php
						endif;
						wp_reset_postdata();
						?>
					</section>
				</div>

				<div class="u-mt">
					<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>"
						class="c-button c-button--white c-button--center">more</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end top-menu -->

	<!-- top-shoplist -->
	<section class="top-shoplist u-ptb">
		<div class="l-container-s">
			<h2 class="c-title-level2 c-title-level2--center">shop list</h2>
			<p class="top-shoplist-copy"><span>首都圏を中心に6店舗展開しています。</span><span>お近くの店舗でお待ちしています。</span></p>

			<?php
				$args     = array(
					'post_type'      => 'shoplist',
					'posts_per_page' => -1,
				);
				$shoplist = new WP_Query( $args );
				if ( $shoplist->have_posts() ) :
					?>
			<div class="u-mt">
				<ul class="top-shoplist-list">
					<?php
					while ( $shoplist->have_posts() ) :
						$shoplist->the_post();
						?>
					<li class="top-shoplist-item"><?php the_title(); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php else : ?>
			<p class="u-mt u-align-center">準備中です</p>
				<?php
			endif;
				wp_reset_postdata();
			?>

			<div class="u-mt">
				<a href="<?php echo esc_url( home_url( '/shoplist/' ) ); ?>" class="c-button c-button--center">more</a>
			</div>
		</div>
	</section>
	<!-- end top-shoplist -->

	<!-- top-blog -->
	<div class="top-blog">
		<section class="u-ptb">
			<div class="l-container-s">
				<h2 class="c-title-level2 c-title-level2--center">blog & news</h2>

				<div class="u-mt">
					<?php
					$blog = new WP_Query(
						array(
							'post_type'      => 'post',
							'posts_per_page' => 3,
						)
					);
					if ( $blog->have_posts() ) :
						?>
					<div class="c-posts c-posts--col3">
						<?php
						while ( $blog->have_posts() ) :
							$blog->the_post();
							?>
						<article class="c-post">
							<a href="<?php the_permalink(); ?>" class="c-post-thumbnail">
								<?php the_post_thumbnail(); ?>
							</a>
							<div class="c-post-date">
								<time datetime="<?php the_time( 'Y-m-d' ); ?>"
									class="c-date"><?php the_time( get_option( 'date_format' ) ); ?></time>
							</div>
							<h3 class="c-post-ttl">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
						</article>
						<?php endwhile; ?>
					</div>
					<?php else : ?>
					<p class="u-align-center">まだ投稿がありません</p>
						<?php
					endif;
					wp_reset_postdata();
					?>
				</div>

				<div class="u-mt">
					<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="c-button c-button--center">more</a>
				</div>
			</div>
		</section>
	</div>
	<!-- end top-blog -->

	<!-- instagram -->
	<?php get_template_part( 'template/instagram', 'list' ); ?>
	<!-- end instagram -->
</main>

<?php get_footer(); ?>