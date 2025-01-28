<section class="c-instagram u-ptb">
	<h2 class="c-title-level2 c-title-level2--center">instagram</h2>

	<ul class="c-instagram-list">
		<?php
		for ( $i = 1; $i <= 6; $i++ ) {
			echo '<li class="c-instagram-item">';
			echo '<img width="402" height="402"
                    srcset="' . esc_url( get_template_directory_uri() . '/img/pic-instagram-post0' . $i . '.jpg' ) . ' 201w, ' . esc_url( get_template_directory_uri() . '/img/pic-instagram-post0' . $i . '@2x.jpg' ) . ' 402w"
                    sizes="(max-width: 767px) 30vw, (max-width: 1719px) 17vw, 260px"
                    src="' . esc_url( get_template_directory_uri() . '/img/pic-instagram-post0' . $i . '@2x.jpg' ) . '"
                    alt="' . esc_attr( '〇〇の写真' ) . '"
                    decoding="async" loading="lazy" />';
			echo '</li>';
		}
		?>
	</ul>

	<div class="c-instagram-button">
		<a href="https://www.instagram.com/?hl=ja" target="_blank" rel="noopener noreferrer"
			class="c-button c-button--center">instagram</a>
	</div>
</section>