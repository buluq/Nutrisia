<?php if (!empty(get_option('nutrisia_shop_address'))): ?>
	<p>Untuk pembelian, pemesanan, dan konsultasi produk, silakan hubungi kami</p>
	<p><strong><?php echo strtoupper(esc_attr(get_option('nutrisia_shop_name'))); ?></strong></p>
	<address><?php echo esc_attr(get_option('nutrisia_shop_address')); ?><br>
		<?php echo esc_attr(get_option('nutrisia_shop_district')); ?>,
		<?php echo esc_attr(get_option('nutrisia_shop_province')); ?><br>
		<?php echo esc_attr(get_option('nutrisia_shop_country')); ?></address>
<?php endif; ?>

<ul>
	<?php if (!empty(get_option('nutrisia_shop_phone'))): ?>
		<li><span class="dashicons dashicons-phone"></span> <?php echo esc_attr(get_option('nutrisia_shop_phone')); ?></li>
	<?php endif; ?>

	<?php if (!empty(get_option('nutrisia_shop_fax'))): ?>
		<li><span class="dashicons dashicons-media-document"></span> <?php echo esc_attr(get_option('nutrisia_shop_fax')); ?></li>
	<?php endif; ?>

	<?php if (!empty(get_option('nutrisia_shop_email'))): ?>
		<li><span class="dashicons dashicons-email"></span> <?php echo esc_attr(get_option('nutrisia_shop_email')); ?></li>
	<?php endif; ?>
</ul>

<?php if (!empty(get_option('nutrisia_sales_phone')) || !empty(get_option('nutrisia_sales_email')) || !empty(get_option('nutrisia_sales_bbm'))): ?>
	<hr>
	<p>Untuk respon cepat, hubungi bagian penjualan kami melalui</p>

	<?php if (!empty(get_option('nutrisia_sales_name'))): ?>
		<p><strong><?php echo ucwords(esc_attr(get_option('nutrisia_sales_name'))); ?></strong></p>
	<?php endif; ?>

	<ul>
		<?php if (!empty(get_option('nutrisia_sales_phone'))): ?>
			<li><span class="dashicons dashicons-phone"></span> <?php echo esc_attr(get_option('nutrisia_sales_phone')); ?></li>
		<?php endif; ?>

		<?php if (!empty(get_option('nutrisia_sales_email'))): ?>
			<li><span class="dashicons dashicons-email"></span> <?php echo esc_attr(get_option('nutrisia_sales_email')); ?></li>
		<?php endif; ?>

		<?php if (!empty(get_option('nutrisia_sales_bbm'))): ?>
			<li><span class="dashicons dashicons-format-chat"></span> <?php echo esc_attr(get_option('nutrisia_sales_bbm')); ?></li>
		<?php endif; ?>
	</ul>
<?php endif;

/* End of file: nutrisia-shop-contact-view.php */
