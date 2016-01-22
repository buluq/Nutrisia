<?php
/**
 * The file that defines the internationalization functionality
 *
 * Loads and defines the internationalization files for the plugin
 * so that it is ready for translation.
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
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for the plugin
 * so that it is ready for translation.
 *
 * @package Nutrisia
 * @since 0.0.1
 */

class NutrisiaI18n {
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 0.0.1
	 */
	public function loadPluginTextdomain() {
		load_plugin_textdomain(
			'nutrisia',
			false,
			dirname(dirname(plugin_basename(__file__))) . '/lang/'
		);
	}
}

/* End of file: nutrisia-i18n.php */