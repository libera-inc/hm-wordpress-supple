<div class="c-search">
	<p class="c-search-title">店舗検索</p>

	<form method="get" action="<?php bloginfo( 'url' ); ?>">
		<input type="hidden" name="post_type" value="shoplist">

		<div class="c-search-form-inner">
			<div class="c-search-text">
				<input type="text" name="s" placeholder="検索"
					value="<?php echo isset( $_GET['s'] ) ? esc_attr( $_GET['s'] ) : ''; ?>" />
			</div>
			<select name="area" class="c-search-select">
				<option value="" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '' ); ?>>---</option>
				<option value="北海道" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '北海道' ); ?>>北海道
				</option>
				<option value="東北" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '東北' ); ?>>東北</option>
				<option value="関東" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '関東' ); ?>>関東</option>
				<option value="中部" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '中部' ); ?>>中部</option>
				<option value="近畿" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '近畿' ); ?>>近畿</option>
				<option value="中国" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '中国' ); ?>>中国</option>
				<option value="四国" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '四国' ); ?>>四国</option>
				<option value="九州沖縄" <?php selected( isset( $_GET['area'] ) ? $_GET['area'] : '', '九州沖縄' ); ?>>九州沖縄
				</option>
			</select>

			<div class="c-search-button">
				<input type="submit" value="検索" />
			</div>
		</div>
	</form>
</div>