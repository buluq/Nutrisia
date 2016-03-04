<?php
/**
 * The file that defines widget.
 *
 * Copyright 2016 Sunu Haeriadi.
 *
 * This file is part of Nutrisia.
 *
 * Nutrisia is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License,
 * or (at your option) any later version.
 *
 * Nutrisia is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Nutrisia.  If not, see <https://www.gnu.org/licenses/>.
 *
 * @package Nutrisia
 * @since 0.0.1
 */

/**
 * Shop contact widget.
 *
 * @package Nutrisia
 * @since 0.0.1
 */
class NutrisiaShopContact extends WP_Widget {
	public	function __construct() {
		parent::__construct(
			'nutrisia_shop_contact',
			__('Nutrisia Contact', 'nutrisia'),
			array('desciption' => __('Display shop contact', 'nutrisia'))
		);
	}

	public function widget($args, $instance) {
		$widget = $args['before_widget'];

		if (!empty($instance['title'])) {
			$widget .= $args['before_title'];
			$widget .= apply_filters('widget_title', $instance['title']);
			$widget .= $args['after_title'];
		}

		ob_start();
		include plugin_dir_path(__file__) . 'nutrisia-shop-contact-view.php';
		$widget .= ob_get_clean();

		$widget .= $args['after_widget'];

		print $widget;
	}

	public function registerWidget() {
		register_widget('NutrisiaShopContact');
	}
}

/* End of file: nutrisia-shop-contact.php */
