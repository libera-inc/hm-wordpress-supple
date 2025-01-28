<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="format-detection" content="telephone=no" />

	<!-- favicon/webclipicon -->
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>" />
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/webclip.png' ); ?>" />

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP&display=swap"
		rel="stylesheet" />

	<!-- css -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/css/style.css' ); ?>" />

	<!-- js -->
	<script src="<?php echo esc_url( get_template_directory_uri() . '/js/main.js' ); ?>" defer>
	</script>

	<?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<header class="header">
		<?php $tag = ( is_home() || is_front_page() ) ? 'h1' : 'p'; ?>
		<<?php echo $tag; ?> class="header-logo">
			<a href="<?php echo esc_url( home_url() ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.svg' ); ?>" width="200"
					height="26" alt="supple" decoding="async" loading="lazy" />
			</a>
		</<?php echo $tag; ?>>


		<a href="https://www.google.com/" class="header-onlineshop" target="_blank" rel="noopener noreferrer">online
			shop</a>

		<nav class="header-nav">
			<ul class="header-list">
				<li class="header-item">
					<a href="<?php echo esc_url( home_url( '/consept/' ) ); ?>" class="header-link">concept</a>
				</li>

				<li class="header-item">
					<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>" class="header-link">menu</a>
				</li>

				<li class="header-item">
					<a href="<?php echo esc_url( home_url( '/shoplist/' ) ); ?>" class="header-link">shoplist</a>
				</li>

				<li class="header-item">
					<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="header-link">blog&news</a>
				</li>
			</ul>
		</nav>
	</header>
	<!-- end header -->