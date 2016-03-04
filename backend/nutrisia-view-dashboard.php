<div class="wrap">
	<h2>Nutrisia Administration</h2>
	<form method="post" action="options.php">
		<?php
		settings_fields('nutrisia_settings');
		do_settings_sections('nutrisia_settings');
		?>

		<h3>Kontak Toko</h3>
		<table class="form-table">
			<tr>
				<th scope="row">Nama toko</th>
				<td><input name="nutrisia_shop_name" class="regular-text" type="text" placeholder="Nama toko atau badan usaha." value="<?php echo esc_attr(get_option('nutrisia_shop_name')); ?>"></td>
			</tr>

			<tr>
				<th scope="row">Alamat toko</th>
				<td>
					<textarea name="nutrisia_shop_address" class="large-text" rows="3" placeholder="Nama jalan, nama gedung, kecamatan, dll."><?php echo esc_attr(get_option('nutrisia_shop_address')); ?></textarea>
					<br>

					<input name="nutrisia_shop_district" class="regular-text" type="text" placeholder="Kabupaten" value="<?php echo esc_attr(get_option('nutrisia_shop_district')); ?>">
					<br>

					<input name="nutrisia_shop_province" class="regular-text" type="text" placeholder="Provinsi" value="<?php echo esc_attr(get_option('nutrisia_shop_province')); ?>">
					<br>

					<input name="nutrisia_shop_country" class="regular-text" type="text" placeholder="Negara" value="<?php echo esc_attr(get_option('nutrisia_shop_country')); ?>">
				</td>
			</tr>

			<tr>
				<th scope="row">Nomor telepon</th>
				<td><input name="nutrisia_shop_phone" class="regular-text" type="text" value="<?php echo esc_attr(get_option('nutrisia_shop_phone')); ?>"></td>
			</tr>

			<tr>
				<th scope="row">Nomor faksimile</th>
				<td><input name="nutrisia_shop_fax" class="regular-text" type="text" value="<?php echo esc_attr(get_option('nutrisia_shop_fax')); ?>"></td>
			</tr>


			<tr>
				<th scope="row">Alamat surel</th>
				<td><input name="nutrisia_shop_email" class="regular-text" type="email" value="<?php echo esc_attr(get_option('nutrisia_shop_email')); ?>"></td>
			</tr>
		</table>

		<h3>Kontak Sales</h3>
		<table class="form-table">
			<tr>
				<th scope="row">Nama sales</th>
				<td><input name="nutrisia_sales_name" class="regular-text" type="text" value="<?php echo esc_attr(get_option('nutrisia_sales_name')); ?>"></td>
			</tr>

			<tr>
				<th scope="row">Nomor telepon</th>
				<td><input name="nutrisia_sales_phone" class="regular-text" type="text" value="<?php echo esc_attr(get_option('nutrisia_sales_phone')); ?>"></td>
			</tr>

			<tr>
				<th scope="row">Alamat surel</th>
				<td><input name="nutrisia_sales_email" class="regular-text" type="email" value="<?php echo esc_attr(get_option('nutrisia_sales_email')); ?>"></td>
			</tr>

			<tr>
				<th scope="row">PIN Blackberry Messenger</th>
				<td><input name="nutrisia_sales_bbm" class="regular-text" type="text" value="<?php echo esc_attr(get_option('nutrisia_sales_bbm')); ?>"></td>
			</tr>
		</table>


		<h3>Live Helper Chat</h3>
		<table class="form-table">
			<tr>
				<th scope="row">Alamat web support site</th>
				<td><input name="nutrisia_supportsite" class="regular-text code" type="url" value="<?php echo esc_attr(get_option('nutrisia_supportsite')); ?>"></td>
			</tr>

			<tr>
				<th scope="row">Skrip live chat</th>
				<td>
					<p>Masukan skrip untuk embed widget live chat disini.</p>
					<p><textarea name="nutrisia_livehelperscript" class="large-text code" rows="15"><?php echo esc_attr(get_option('nutrisia_livehelperscript')); ?></textarea></p>
				</td>
			</tr>
		</table>

		<?php submit_button(); ?>
	</form>
</div>
