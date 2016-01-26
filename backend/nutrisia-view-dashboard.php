<div class="wrap">
	<h2>Nutrisia Administration</h2>
	<form method="post" action="options.php">
		<?php settings_fields('nutrisia_settings'); ?>
		<table class="form-table">
			<tr>
				<th>Skrip live chat</th>
				<td>
					<textarea name="livehelperscript" class="large-text code" rows="10"><?php echo esc_attr(get_option('livehelperscript')); ?></textarea>
				</td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>