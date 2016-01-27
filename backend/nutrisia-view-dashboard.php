<div class="wrap">
	<h2>Nutrisia Administration</h2>
	<form method="post" action="options.php">
		<?php settings_fields('nutrisia_settings'); ?>
		<table class="form-table">
			<tr>
				<th scope="row">Alamat web support site</th>
				<td><input name="nutrisia_supportsite" class="regular-text code" type="url" value="<?php echo esc_attr(get_option('nutrisia_supportsite')); ?>"</td>
			</tr>
			<tr>
				<th scope="row">Skrip live chat</th>
				<td>
					<p>Masukan skrip untuk embed widget live chat disini.</p>
					<p><textarea name="livehelperscript" class="large-text code" rows="15"><?php echo esc_attr(get_option('livehelperscript')); ?></textarea></p>
				</td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>